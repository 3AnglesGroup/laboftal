<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
}
