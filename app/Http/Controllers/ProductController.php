<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function store(Request $request){
      $product = new Product();
      $product->name = $request->name;
      $product->description = $request->description;
      $product->marca_id = $request->marca;
      $product->category_id = $request->category;
      $product->subcategory_id = $request->subcategory;

      $product->archivo = $request->file('archivo')->store('archivos');
      $product->image = $request->file('image')->store('productos');
      $product->save();

      return 200;
    }

    public function show($id){
      return Product::where('subcategory_id',$id)->get();
    }

    public function view($id){

      $product = Product::find($id);
      return view('detalle')->with('product',$product);

    }
}
