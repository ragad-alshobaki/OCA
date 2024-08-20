<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Products::all();
        return view('products.index')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Products::create([
            'p_name' => $request->input('p_name'),
            'p_descrption' => $request->input('p_descrption'),
            'p_price' => $request->input('p_price'),
        ]);

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    // public function Show()
    // {
        // $product = Products::onlyTrashed()->findOrFail($id);
        // return redirect()->route('porducts.softDelet');
    // }

    public function Show()
    {
        // $product = Products::onlyTrashed()->findOrFail($id);
        $products = Products::onlyTrashed()->get();
        return view('products.softDelete' , compact('products'));
        // return redirect()->route('porducts.softDelet');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $products= products::findorFail($id);
        return view('products.edit')->with('products', $products);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Products $products, $id)
    {
        $products = Products::findorFail($id);
        $products->update([
            "p_name" => $request->p_name,
            "p_descrption" => $request->p_descrption,
            "p_price" => $request->p_price,
        ]);
        return redirect()->route('products.index'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // $product->delete();
        Products::findorFail($id)->delete(); 
        return redirect()->route('products.index'); 
    }
}
