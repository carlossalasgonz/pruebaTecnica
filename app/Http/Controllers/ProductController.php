<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Manufacturer;

class ProductController extends Controller {
    
    public function index(Request $request){
        $categories = Category::all();
        $manufacturers = Manufacturer::all();
        $products = Product::paginate(10);
        return view('welcome', compact('products', 'categories', 'manufacturers'));
    }
}
