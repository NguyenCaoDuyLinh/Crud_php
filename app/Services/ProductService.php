<?php


namespace App\Services;


use App\Models\Product;
use Exception;
use Illuminate\Support\Facades\Log;

class ProductService
{
    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    function getList()
    {
        $product = $this->product->get();

        return $product;
    }
}