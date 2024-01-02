<?php

namespace App\Actions;

use App\Models\Category;
use App\Models\Product;
use \Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Builder;

class CategoryPageAction
{
    public function __invoke(int $categoryId): array
    {
        $category = Category::query()->where('id', $categoryId)->first();;
        $relatedProducts = Product::query()->where('category_id', $categoryId)->get();

        return ['category' => $category, 'products' => $relatedProducts];
    }
}
