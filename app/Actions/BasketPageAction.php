<?php

namespace App\Actions;

use App\Models\Product;

class BasketPageAction
{
    public function __invoke(): \Illuminate\Database\Eloquent\Collection | array
    {
        $productIds = session()->get('basket');
        return Product::query()->whereIn('id', $productIds)->get();
    }
}
