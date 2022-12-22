<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['page_title']='Products';
       
        return view('admin.products.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $data['page_title']='Products';
        $categories=Category::all();

        return view('admin.products.create',$data)->with(compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated= $request->validate([
            'serial_number'=>'regex:/^[a-zA-Z]+$/',
            'serial_number'=>'unique:products','confirmed'
            
        ]);
        $data=$request->except('serial_number_confirmation');
       if($data['category_id']==1){
        $name='Car Tracker';
       }else if($data['category_id']==2){
        $name='Speed Governor';
       }else if($data['category_id']==3){
        $name='Cctv Camera';
       }

      $data['product_name']=$name;
      $product=Product::create($data);
      if($product){
        // return 'we created a product';
        return redirect()->route('products.index')->with('success','product added successfully');
      }else{
        return back()->with('error','ailed please try again');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return 'we are about to edit products';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    public function fetchProducts()
    {
        $models=Product::all();
        return Datatables::of($models)
           ->rawColumns(['action'])
            ->addColumn('action', function ($model) {
                $edit_url = route('products.edit',$model->id);
                
             return '<div class="dropdown ">
        <button class="btn btn-pink btn btn-xs dropdown-toggle" type="button" data-toggle="dropdown">Action
        <span class="caret"></span></button>
        <ul class="dropdown-menu">
        <li><a style="cursor:pointer;" class="reject-modal"  data-title="Edit" data-url="' . $edit_url . '">Edit Details</a></li>

        </ul>
        </div> ';

            })
            ->make(true);
    }

}
