<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products =Product::all();
        return view('home',['products'=>$products]);
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        
        $data = $request->validate([
            'name' => 'required',
            'storage' => 'required',
            'cost' => 'required|decimal:2',
            'quantity' => 'required |numeric',
            'reorder_Level' => 'required| numeric',
        ]);

        $newProduct = Product::create($data);

        return redirect(route('home'));

    }

    public function edit(Product $product){
       return view('products.edit',['product'=> $product]); 
        
    }

    public function update(Product $product,Request $request){
        
        $data = $request->validate([
            'name' => 'required',
            'storage' => 'required',
            'cost' => 'required|decimal:2',
            'quantity' => 'required |numeric',
            'reorder_Level' => 'required| numeric',
        ]);

        $product->update($data);

        return redirect(route('home'))->with('success','Product Updated Successfully.');

    }

    public function delete(Product $product){
        $product->delete();
        return redirect(route('home'))->with('success','Product Deleted Successfully.');

     }

}
