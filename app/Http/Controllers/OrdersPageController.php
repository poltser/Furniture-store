<?php

namespace App\Http\Controllers;

use App\Actions\OrdersPageAction;
use \Illuminate\Contracts\View\View;
use \Illuminate\Foundation\Application;
use \Illuminate\Contracts\View\Factory;

class OrdersPageController
{
    public function index(OrdersPageAction $action): View | Application | Factory | \Illuminate\Contracts\Foundation\Application
    {
        $orders = $action();
        return view('ordersPage', ['orders' => $orders]);
    }
}
