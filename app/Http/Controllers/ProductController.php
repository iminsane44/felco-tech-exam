<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function index()
    {
      $products = Product::with('category')->get();
      return view('welcome', compact('products'));
    }

    public function create()
    {
      $categories = Category::all();
      return view('products.create', compact('categories'));
    }

    public function product(Request $request)
    {

      $request->validate([
          'category_code' => 'required',
          'item_code' => 'required|min:3',
          'description' => 'required|min:3'
      ]);

      $input = $request->all();

      Product::create($input);
      return redirect('/');
    }

    public function edit($product)
    {
      $categories =Category::all();
      $product = Product::find($product);

      return view('products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, $product)
    {
     
      $input = $request->all();

      $product = Product::find($product);
      $product->item_code = $input['item_code'];
      $product->description = $input['description'];
      $product->category_code = $input['category_code'];

      $product->save();

      return redirect('/'); 
    }

    public function search()
    {

      $search_product = $_GET['query'];

      $categories = Category::all();
    // $products = Product::where('description', 'LIKE', '%'.$search_product.'%')->with('category')->get();
    
      $products = Product::join('categories', 'categories.code', '=', 'products.category_code')
      ->where('products.description', 'LIKE', '%' . $search_product . '%')->with('category')
      ->orWhere('products.item_code', 'LIKE', '%' . $search_product . '%')->with('category')
      ->orWhere('products.category_code', 'LIKE', '%' . $search_product . '%')->with('category')
      ->orWhere('categories.desc', 'LIKE', '%' . $search_product . '%')
      ->get();



      // echo '<pre>';
      // print_r($products);
      // exit;

      return view('products.search', compact('products', 'categories'));

    }


}
