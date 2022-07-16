<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Unit;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::all();
        return view('admin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        $units=Unit::all();
        return view('admin.product.create',compact('categories','units'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product=new Product();
        $product->name=$request->name;
        $product->price=$request->price;
        $product->discount_percent=$request->discount_percent;
        $product->selling_price=$request->price-($request->price*$request->discount)/100;
        $product->description=$request->description;
        $product->category_id=$request->category_id;
        $product->unit_id=$request->unit_id;
        if($request->hasFile('image')){
            $file=$request->image;
            $newName=time().'.'.$file->getClientOriginalExtension();
            $file->move('image',$newName);
            $product->image="image/$newName";
        }
        $product->save();
        // toast('Your Post is saved!','success');
        return redirect('/product');
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
    public function edit($id)
    {
        $product=Product::find($id);
        $categories=Category::all();
        $units=Unit::all();
        return view('admin.product.edit',compact('product','categories','units'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product=Product::find($id);
        $product->name=$request->name;
        $product->price=$request->price;
        $product->discount_percent=$request->discount_percent;
        $product->selling_price=$request->selling_price;
        $product->description=$request->description;
        $product->category_id=$request->category_id;
        $product->unit_id=$request->unit_id;

        if($request->hasFile('image')){
            $file=$request->image;
            $newName=time().'.'.$file->getClientOriginalExtension();
            $file->move('image',$newName);
            $product->image="image/$newName";
        }
        $product->update();
        // toast('Your Post is saved!','success');
        return redirect('/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=Product::find($id);
        $product->categories()->dissociate();
        $product->delete();
        return redirect('/product');
    }
}
