<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product ;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get all products
        $products = Product::all();
        
        // Return the view with the products data
        return view('index', ['products' => $products]);
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('create') ;

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'name' =>'required' ,
            'qty' =>'required|numeric' ,
            'price' => 'required|decimal:2',
            'description' => 'nullable',
        ]);

        $newProduct = Product::create($data) ;
        return redirect(route('product.index'));
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
    public function edit(Product $product)
    {
        return view('edit' ,['product'=> $product]) ;

        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'name' =>'required' ,
            'qty' =>'required|numeric' ,
            'price' => 'required|decimal:2',
            'description' => 'nullable',
        ]);

        $product ->update($data) ;
        return redirect(route('product.index'))->with('success' ,'Product Upadte Successfully');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect(route('product.index'))->with('success' ,'Product Deleted Successfully');

        //
    }
}
