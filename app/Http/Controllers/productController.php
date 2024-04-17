<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Products::get();
        return view("showProduct", compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $detail = new Products();
        $detail->name = $request->productName;
        $detail->quantity = $request->quantity;
        $detail->rate = $request->rate;
        if($request->file('image')){
            $image=$request->file('image');//get the image file in image variable
            $imagename = time().'.'.$image->getClientOriginalExtension(); //create image file name like current time with extension
            $image->storeAs('public',$imagename);
            $detail->img=$imagename;
        }

        $detail->save();
        return redirect('/viewpro');

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
    public function edit(string $id)
    {
        $upto = Products::find($id);
        return view("editProduct",compact('upto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Products::find($id);
        $data->name = $request->productName;
        $data->quantity = $request->quantity;
        $data->rate = $request->rate;
        if($request->file('image')){
            $image=$request->file('image');//get the image file in image variable
            $imagename = time().'.'.$image->getClientOriginalExtension(); //create image file name like current time with extension
            $image->storeAs('public',$imagename);
            $data->img=$imagename;
        }
        $data->save();
        return redirect('/viewpro');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Products::find($id);
        $product->delete();
        return redirect('/viewpro');
    }
}
