<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class MainController extends Controller
{
    //
    public function index()
    {
        return view('main');
    }

    public function category($category, $group = null, $service = null)
    {
        $categoryModel = Category::where('alias', $category)->firstOrFail();

        if (is_null($group)) {
            return view('groups/' . $category);
        }

        return false;

        //var_dump($categoryModel);
    }
}
