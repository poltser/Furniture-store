<?php

namespace App\Http\Controllers;

use App\Actions\GetHomePageDataAction;
use \Illuminate\Contracts\View\View;
use \Illuminate\Foundation\Application;
use \Illuminate\Contracts\View\Factory;

class MainPageController
{
    public function index(GetHomePageDataAction $action): View | Application | Factory | \Illuminate\Contracts\Foundation\Application
    {
        $dataToRender = $action();
        return view('mainPage', ['dataToRender' => $dataToRender]);
    }
}
