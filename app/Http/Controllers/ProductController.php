<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProductService;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use Carbon\Carbon;
use App\Models\Product;
use App\Models\Publishing_company;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }
    public function getListProduct()
    {
        // $products = $this->productService->getListProduct();
        $data['products'] = Product::paginate(10);
        return view('admin/product', $data);
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats = $this->productService->getListCate();
        $nxbs = $this->productService->getListNXB();
        return view('admin/addproduct', compact('cats', 'nxbs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('file_upload')) {
            $file = $request->file_upload;
            // $ext = $request->file_upload->extension();
            $file_name = $file->getClientoriginalName();
            $file->move(public_path('product'), $file_name);
        }
        $nxb1 =  DB::table('Publishing_companies')->where('Publishing_Company_Name', $request->nxb)->get('Publishing_Company_ID');
        $category = Category::where('Category_Name', '=', $request->category)->get(['Category_Id']);
        $key = $category[0]->Category_Id;
        $request->merge(['Category_Id' => $category[0]->Category_Id]);
        $request->merge(['Publishing_Company_Id' => $nxb1[0]->Publishing_Company_ID]);
        $dt = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
        $request->merge(['Date' => $dt]);
        $request->merge(['Avatar' => $file_name]);
        $request->merge(['SKU' => $key . time()]);
        // dd($request->except(['_token', 'file_upload','category','nxb']));
        if (Product::create($request->except(['_token', 'file_upload', 'category', 'nxb']))) {
            return redirect()->route('product.list')->with([
                'success' => 'created po    st success'
            ]);
        }
        return redirect()->back()->with([
            'fail' => 'created post Fail'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::where('Product_Id', $id)->get(        
        );
        // dd($product[0]);
        $cat_id1 = $product[0]->Category_Id;
        $nxb1_id = $product[0]->Publishing_Company_Id;
        // // dd($cat_id1, $nxb1_id);
        $nxb1 =  DB::table('Publishing_companies')->where('Publishing_Company_ID', $nxb1_id)->get('Publishing_Company_Name');
        $category = Category::where('Category_id', $cat_id1)->get('Category_name');
        // // dd($nxb1, $category);
        $cat_id = $category[0]->Category_name;
        $nxb_id = $nxb1[0]->Publishing_Company_Name;
        // dd($cat_id, $nxb_id);
        // $product->merge(['Category_Name' => $category[0]->Category_name]);
        // $product->merge(['Publishing_Company_Name' => $nxb1[0]->Publishing_Company_Name]);
        $cats = $this->productService->getListCate();
        $nxbs = $this->productService->getListNXB();
        // dd($cats,$nxbs);
        return view('admin/editproduct', compact('product', 'cats', 'nxbs', 'cat_id', 'nxb_id'));
        // return view('admin/editproduct', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($this->productService->updateProduct($request, $id)) {
            return redirect()->back()->with([
                'success' => 'update post success'
            ]);
        }
        return redirect()->back()->with([
            'fail' => 'update post Fail'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
