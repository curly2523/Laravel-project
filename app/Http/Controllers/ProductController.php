<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products =Product::all();
        return view('inventory',['products'=>$products]);
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

        return redirect(route('inventory'))->with('success', 'Product Created Successfully.');

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

        return redirect(route('inventory'))->with('success','Product Updated Successfully.');

    }

    public function delete(Product $product){
        $product->delete();
        return redirect(route('inventory'))->with('success','Product Deleted Successfully.');

     }

     public function search(Request $request){
        $output = "";
        
        $products = Product::where('name', 'LIKE', '%' . $request->search . '%')
                           ->orWhere('storage', 'LIKE', '%' . $request->search . '%')
                           ->get();
    
        foreach ($products as $product) {
            $output .= 
            '<tr>
                <td>' . $product->name . '</td>
                <td>' . $product->storage . 'GB</td>
                <td>' . $product->cost . '</td>
                <td>' . $product->quantity . '</td>
                <td>' . $product->reorder_Level . '</td>
                <td>
                    <div class="table-data-feature">
                        <a href="' . route('products.edit', ['product' => $product]) . '">
                            <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                <i class="zmdi zmdi-edit"></i>
                            </button>
                        </a>
                        <form method="post" action="' . route('products.delete', ['product' => $product]) . '">
                            ' . csrf_field() . '
                            ' . method_field('delete') . '
                            <button class="item" data-toggle="tooltip" data-placement="top" title="Delete" type="submit" value="Delete">
                                <i class="zmdi zmdi-delete"></i>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>';
        }
    
        return response($output);
    }
    
    

}
