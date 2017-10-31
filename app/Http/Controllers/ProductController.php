<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Category;
use App\Product;
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
    public function create()
    {
        $categories=Category::pluck('name','id');
        return view('admin.product.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formInput = $request->except('image');
       

        $this->validate($request,[
            'name'=> 'required',
            'size' => 'required',
            'image' => 'image|mimes:png,jpg,jpeg|max:1000'

         ]);



        // image upload
        
        $image=$request->image;

       
        if($image)
            {
                 $imageName=$image->getClientOriginalname();
                 $image->move('images',$imageName);
                 $formInput['image']= $imageName;
             }

       // dd($formInput);

        Product::create($formInput);
        return redirect()->route('product.index');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
