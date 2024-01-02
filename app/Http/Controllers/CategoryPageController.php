<?php

namespace App\Http\Controllers;

use App\Actions\CategoryPageAction;
use Illuminate\Http\Request;

class CategoryPageController extends Controller
{
    public function index(Request $request, CategoryPageAction $action): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $categoryData = $action($request->get('category_id'));
        return view('categoryPage', $categoryData);
    }
}
