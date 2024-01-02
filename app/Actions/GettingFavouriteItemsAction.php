<?php

namespace App\Actions;

use App\Models\FavouriteProduct;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class GettingFavouriteItemsAction
{
    public function __invoke(): \Illuminate\Database\Eloquent\Collection | array
    {
        $productIds = FavouriteProduct::query()
            ->select('product_id')
            ->where('user_id', Auth::user()->id)
            ->get()
            ->toArray();

        $ids = [];

        foreach ($productIds as $id) {
            $ids[] = $id['product_id'];
        }

        return Product::query()->whereIn('id', $ids)->get();
    }
}
