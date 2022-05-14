<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
  //
  public function index()
  {
    $categories = Category::all();
    return view('categories.index', compact('categories'));
  }

  public function create()
  {
    $categories = Category::all();
    return view('categories.create');
  }

  public function product(Request $request)
  {
    $input = $request->all();

    Category::create($input);
    return redirect('/category');
  }

  public function edit($category)
  {

    $category = Category::find($category);

    return view('categories.edit', compact('category'));
  }

  public function update(Request $request, $category)
  {

    $input = $request->all();

    $category = Category::find($category);
    $category->code = $input['code'];
    $category->desc = $input['desc'];

    $category->save();

    return redirect('/category');
  }
}
