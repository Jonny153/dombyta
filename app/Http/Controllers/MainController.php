<?php

namespace App\Http\Controllers;

use App\Models\Service;
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


        if (is_null($service)) {

            $categoryModel = Category::where('alias', $category)->firstOrFail();
            return view('categories/' . $category,
                [
                    'data' => $categoryModel,
                    'page' => $category
                ]);
        } else {

            $serviceModel = Service::where('alias', $service)
                ->whereHas('category', function ($query) use ($category) {
                $query->where('alias', $category);
            })->firstOrFail();

            //dd($serviceModel);

            return view('services/' . $category . '/' . $service,
                [
                    'data' => $serviceModel,
                    'page' => $category.'.'.$service
                ]);
        }

    }
}
