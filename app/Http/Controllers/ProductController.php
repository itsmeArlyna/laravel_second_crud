<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->is('view')) {
            $products = Products::all();
            return view('seller.view_products', ['products' => $products]);
        } elseif ($request->is('update')) {
            $products = Products::all();
            return view('seller.update_products', ['products' => $products]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('seller.upload_products');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'quantity' => 'required|numeric',
            'price' => 'required|numeric|between:0,999999.99',
            'description' => 'nullable'
        ]);

        $imagePath = $request->file('image')->store('products', 'public');
        $data['image'] = $imagePath;
        Products::create($data);

        return redirect(route('seller.view_products'))->with('success', 'Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $product)
    {
        return view('seller.edit', ['product' => $product]);
    }

    public function update(Products $product, Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'quantity' => 'required|numeric',
            'price' => 'required|numeric|between:0,999999.99',
            'description' => 'nullable'
        ]);
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
            $data['image'] = $imagePath;
        }

        $product->update($data);

        return redirect(route('seller.update_products'))->with('success', 'Updated Successfully!');
    }
    public function destroy(Products $product)
    {
        $product->delete();
        return redirect(route('seller.update_products'))->with('success', 'Deleted Successfully!');
    }
    public function search(Request $request)
    {
        $search = $request->input('search');
        $products = Products::where('name', 'LIKE', "%$search%")->get();

        return view('seller.update_products', compact('products'));
    }
}
