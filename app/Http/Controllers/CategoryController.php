<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Services\CategoryService;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }
    public function index()
    {
        $data['cats'] = Category::paginate(10);
        return view('admin/category', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/addcategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        if (Category::create($request->all())) {
            return redirect()->route('category.list')->with([
                'success' => 'created category success'
            ]);
        }
        return redirect()->back()->with([
            'fail' => 'created category Fail'
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
        $cat = Category::where('Category_id', $id)->get();
        return view('admin/editcategory', compact('cat'));
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
        // if ($this->categoryService->updateCategory($request, $id)) {
        //     return redirect()->route('category.list')->with([
        //         'success' => 'update post success'
        //     ]);
        // }
        // return redirect()->back()->with([
        //     'fail' => 'update post Fail'
        // ]);
        $name = $request->Category_name;
        Category::where('Category_Id', $id)->update([
            'Category_name' => $name,
        ]);
        return redirect()->route('category.list')->with([
            'success' => 'update category successfully'
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
        Category::where('Category_Id', $id)->delete();
        return redirect()->route('category.list')->with([
            'success' => 'delete category successfully'
        ]);
    }
}
