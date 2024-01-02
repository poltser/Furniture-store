<?php

namespace App\Actions;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrdersPageAction
{
    public function __invoke()
    {
        return Order::query()->where('user_id', Auth::user()->id)->get();
    }
}
