<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        if(request()->category){
            $products = Product::with('categories')->whereHas('categories', function($query){
                $query->where('title', request()->category);
            })->get();
        }else{

            $products = Product::with('categories')->get();
        }
        return view('products.products', compact('products'));
    }
    public function create(Request $request)
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }
    public function store(Request $request)
    {
        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->save();

        $category = Category::find([$request->category]);
        $product->categories()->attach($category);

        return redirect()->route('product.products');

    }
    public function show(Product $product)
    {
    return view('products.show', compact('product'));
    }
}
