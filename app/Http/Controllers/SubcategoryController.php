<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Subcategory;

class SubcategoryController extends Controller
{
  public function store(Request $request){
    $subcategory = new Subcategory();
    $subcategory->name = $request->name;
    $subcategory->category_id = (int)$request->category;
    $subcategory->save();
    return 200;
  }

  public function descripcion($id){
    $categoria = Category::find($id);

    $subs = Subcategory::where('category_id',$id)->get();
    return view('subcategorias')->with('categoria',$categoria)->with('subs',$subs);
  }
}
