<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        print_r(route('products'));
        return view('products.index');
        // $title = "Welcome to my laravel 8 revision";
        // $description = "Created by Krishman";

        // $data = [
        //     'one' => 'iphone',
        //     'two' => 'samsung'
        // ];

        //Compact Method
        // return view('products.index', compact('title', 'description'));

        // With Method
        //return view('products.index')->with('data', $data); // ony useful to pass one data
        // return view('products.index')->with('description', $description); cannot add

        // Directly in the view
        // return view('products.index', [
        //     'data' => $data
        // ]);
    }

    public function about(){
        return 'This is about page';
    }

    public function show($name, $id){
        $data = [
            'one' => 'iphone',
            'two' => 'samsung'
        ];
        // return view('products.index', [
        //     'products' => $data[$name] ?? 'Product ' . $name . ' does not exist.',
        //     'id' => $id
        // ]);
        $products = $data[$name];
        return view('products.index', compact('products', 'id'));
    }

    // public function show($id){

    //     return view('products.index', [
    //         'id' => $id ?? 'Product id ' . $id . ' does not exist.'
    //     ]);
    // }
}
