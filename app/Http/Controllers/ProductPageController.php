<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class ProductPageController
{
    public function index(int $productId): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $product = Product::query()->where('id', $productId)->first();
        $categoryName = Category::query()->where('id', $product->category_id)->first();

        return view('productPage', ['product' => $product, 'category' => $categoryName->name]);
    }
}
