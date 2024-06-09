<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function getAllProducts(){
        
        $products = Product::all();

        return view('products', ['products' => $products]);
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){

        $productData = $request->validate([
            'name_product' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
        ]);


        Product::create($productData);

        return redirect('/');
    }
}
