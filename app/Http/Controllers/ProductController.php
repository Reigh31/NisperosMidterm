<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['title' => 'Nemo', 'description' => 'Description of Movie 1'],
            ['title' => 'Avatar', 'description' => 'Description of Movie 2'],
            ['title' => 'SpiderMan', 'description' => 'Description of Movie 3'],
            // Add more movies as needed
        ];

        return view('products.index', compact('products'));
    }
}
