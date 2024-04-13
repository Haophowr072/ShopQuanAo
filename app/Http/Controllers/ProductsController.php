<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    
    public function index(){
        $title = 'Hello World';
        // return view('products.index', compact('title'));
        $name = 'Hao';

        return view('products.index') -> with('name', $name);
    }

    public function product($id) {
        return 'product id = '.$id;
    }
}
