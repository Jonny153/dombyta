<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class MainController extends Controller
{
    //
    public function index()
    {
        return view('main',
            [
                'page' => 'main'
            ]);
    }

    public function category($category, $service = null)
    {
        $categoryModel = Category::where('alias', $category)->firstOrFail();

        if (is_null($service)) {
            return view('categories/' . $category, ['page' => $category]);
        }

        return false;

        //var_dump($categoryModel);
    }
}
