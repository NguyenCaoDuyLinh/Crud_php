<?php


namespace App\Services;


use App\Models\Product;
use App\Models\Category;
use App\Models\Publishing_company;
use Exception;
use Illuminate\Support\Facades\Log;

class CategoryService
{
    public function __construct(Category $category)
    {
        $this->category = $category;
    }
    function updateCategory($request, $id)
    {
        try {
            $this->category = Category::where('Category_id', $id);
            $this->category->Category_name = $request->Category_name;
            $this->category->save();  
            return true;
        } catch (Exception $e) {
            Log::error($e);

            return false;
        }
    }
}
