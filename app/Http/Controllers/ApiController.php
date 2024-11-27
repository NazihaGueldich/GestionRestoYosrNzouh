<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parameters;
use App\Models\Categories;

class ApiController extends Controller
{
    public function getParameter(){
        $parameter=Parameters::first();
        return response()->json($parameter);
    }

    public function listeCategories(){
        $categories = Categories::all()->toArray();
        return array_reverse($categories);
    }
}
