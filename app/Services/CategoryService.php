<?php


namespace App\Services;


use App\Models\Category;
use Exception;
use Illuminate\Support\Facades\Log;

class CategoryService
{
    public function __construct(Category $cat)
    {
        $this->cat = $cat;
    }

    function getList()
    {
        $cat = $this->cat->get();

        return $cat;
    }
}