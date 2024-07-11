<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductCategory;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = ProductCategory::all();
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'category_name' => 'required'
        ]);

        ProductCategory::create($data);

        return redirect(route('categories.index'))->with('success', 'Category Created Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductCategory $productCategory)
    {
        return view('categories.edit', compact('productCategory'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  ProductCategory $productCategory)
    {
        $data = $request->validate([
            'category_name' => 'required'
        ]);

        $productCategory->update($data);

        return redirect(route('categories.index'))->with('success', 'Category Updated Successfully.');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductCategory $productCategory)
    {
        $productCategory->delete();

        return redirect(route('categories.index'))->with('success', 'Category Deleted Successfully.');
    }
}
