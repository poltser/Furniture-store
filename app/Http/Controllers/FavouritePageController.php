<?php

namespace App\Http\Controllers;

use App\Actions\GettingFavouriteItemsAction;
use App\Models\FavouriteProduct;
use \Illuminate\Contracts\View\View;
use \Illuminate\Foundation\Application;
use \Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use \Illuminate\Routing\Redirector;
use \Illuminate\Http\RedirectResponse;

class FavouritePageController
{
    public function index(GettingFavouriteItemsAction $action): View | Application | Factory | \Illuminate\Contracts\Foundation\Application
    {
        $favouriteProducts = $action();

        return view('favourites', ['favouriteProducts' => $favouriteProducts]);
    }


    public function addFavouriteProduct(Request $request): Application | Redirector | RedirectResponse | \Illuminate\Contracts\Foundation\Application
    {
        $productId = $request->get('productId');
        $userId = $request->get('userId');

        FavouriteProduct::query()->insert([
            'product_id' => $productId,
            'user_id'    => $userId
        ]);

        return redirect('favourites');
    }
}
