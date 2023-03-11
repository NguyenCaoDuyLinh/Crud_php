<?php


namespace App\Services;


use App\Models\Product;
use App\Models\Category;
use App\Models\Publishing_company;
use Exception;
use Illuminate\Support\Facades\Log;

class ProductService
{
    public function __construct(Product $product,Category $cat, Publishing_company $nxb)
    {
        $this->product = $product;
        $this->cat = $cat;
        $this->nxb = $nxb;
    }

    function getListProduct()
    {
        $product = $this->product->get();

        return $product;
    }
    function getListCate()
    {
        $cat = $this->cat->get();

        return $cat;
    }
    function get4Product(){
        $product = $this->product->orderBy('Product_Id', 'desc')->take(4)->get();

        return $product;
    }
    function getListNXB()
    {
        $nxb = $this->nxb->get();

        return $nxb;
    }
    function insertPro($request)
    {
        try {
            $this->product::create($request);

            return true;
        } catch (Exception $e) {
            Log::error($e);

            return false;
        }
    }
    function updateProduct($request, $id) {
        // $num = filter.var(,FILTER_SANITZE_NUMBER_INT);
        try {
            $this->product = Product::where('Product_Id', $id);
            $this->product->Name = $request->Name;
            $this->product->Author = $request->Author;
            $this->product->Price = $request->Price;
            $this->product->Quantity = $request->Quantity;
            $this->product->Description = $request->Description;
            $this->product->Category_Id = $request->Category_Id;
            $this->product->Publishing_Company_Id = $request->Publishing_Company_Id;
            $this->product->Date = $request->Date;
            $this->product->Avatar = $request->Avatar;
            $this->product->SKU = $request->SKU;               
            $this->product->update();
            return true;
        } catch (Exception $e) {
            Log::error($e);

            return false;
        }
    }
}