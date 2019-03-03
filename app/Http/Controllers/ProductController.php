<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::All();

        return response()->json(['success'=> true, 'message'=> $products->toArray()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $credentials = $request->only('name', 'price');
        
        $rules = Product::$rules;
        $validator = Validator::make($credentials, $rules);
        if($validator->fails()) {
            return response()->json(['success'=> false, 'error'=> $validator->messages()]);
        }

        $name = $request->name;
        $price = $request->price;

        $product = Product::create(['name' => $name, 'price' => $price]);

        return response()->json(['success'=> true, 'message'=> $product->toArray()]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
        return response()->json(['success'=> true, 'message'=> $product->toArray()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {           
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
        $credentials = $request->only('name', 'price');
        
        $rules = Product::$rules;
        $rules['name'] = $rules['name'] . ',id,' . $product->id;

        $validator = Validator::make($credentials, $rules);
        if($validator->fails()) {
            return response()->json(['success'=> false, 'error'=> $validator->messages()]);
        }

        $name = $request->name;
        $price = $request->price;
        $product->update(['name' => $name, 'price' => $price]);

        return response()->json(['success'=> true, 'message'=> $product->toArray()]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        try {
            $product->delete();
        } catch (Exception $e) {
            return response()->json(['success'=> fakse, 'message'=> $e]);
        }
        //
       return response()->json(['success'=> true, 'message'=> '']);
    }
}
