<?php

namespace App\Http\Controllers;

use App\Actions\BasketPageAction;
use App\Models\Order;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use \Illuminate\Routing\Redirector;
use \Illuminate\Http\RedirectResponse;

class BasketController
{
    public function index(BasketPageAction $action): View | Application | Factory | \Illuminate\Contracts\Foundation\Application
    {
        $products = $action();
        $cost = 0;

        foreach ($products as $product) {
            $cost += $product->price;
        }

        return view('basket', ['products' => $products, 'cost' => $cost]);
    }


    public function addToBasket(Request $request): Application | Redirector| RedirectResponse| \Illuminate\Contracts\Foundation\Application
    {
        $productId = $request->get('productId');

        if (!session()->get('basket')) {
            $basket = [];
            $basket[] = $productId;
            session()->put('basket', $basket);
        } else {
            $basket = session()->get('basket');
            $basket[] = $productId;
            session()->put('basket', $basket);
        }

        return redirect('basket');
    }


    public function confirmOrder(Request $request): Application | Redirector | RedirectResponse | \Illuminate\Contracts\Foundation\Application
    {
        Order::query()->insert([
           'user_id' => $request->get('userId'),
           'cost'    => $request->get('totalCost')
        ]);

        session()->forget('basket');

        return redirect('/');
    }
}
