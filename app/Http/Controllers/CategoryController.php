<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Subcategory;



class CategoryController extends Controller
{
    public function store(Request $request){
      $category = new Category();
      $category->name = $request->name;
      $category->image = $request->file('image')->store('categoria');
      $category->marca_id = (int)$request->marca;
      $category->save();
      return 200;
    }

    public function categories($id){
      return Category::where('marca_id',$id)->get();
    }
    public function subcategories($id){
      return Subcategory::where('category_id',$id)->get();
    }
}
