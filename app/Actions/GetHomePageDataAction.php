<?php

namespace App\Actions;

use App\Models\Category;
use App\Models\Product;

class GetHomePageDataAction
{
    public function __invoke(): array
    {
        $categories = $this->getCategories();
        $bestProducts = $this->getBestProducts();

        return ['categories' => $categories, 'products' => $bestProducts];
    }

    protected function getBestProducts(): array
    {
        return Product::query()->where('is_best', 1)->get()->all();
    }

    protected function getCategories(): array
    {
        return Category::query()->get()->all();
    }
}
