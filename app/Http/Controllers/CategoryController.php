<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Str;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['page_title']='categories';
        return view('admin.categories.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['page_title']='Categories';
        return view('admin.categories.create',$data);
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
            // 'name'=>'regex:/^[a-zA-Z]+$/',
            'name'=>'regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
            
        ]);

        $data=$request->all();

        $slug=Str::slug($request->input('name'));
        $slug_count=Category::where('slug',$slug)->count();
        if($slug_count>0){
            $slug.=time().'-'.$slug;
        }
           $data['slug']=$slug;

        $category=Category::create($data);
        if($category){
            return redirect()->route('categories.index')->with('success','category added successfully');
        }
        return redirect()->route('categories.index')->with('error','failed please try again');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category=Category::findOrFail($id);
        return $category->products;
        // return view('admin.categories.edit',compact('category')) ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }

    public function fetchCategory()
    {
   $models=Category::all();
        return Datatables::of($models)
           ->rawColumns(['action'])
            ->addColumn('action', function ($model) {
                $edit_url = route('categories.edit',$model->id);
                
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
    public function cascadeProducts($id)
    {

        return $id;
        $models = Product::Where(['category_id' => $id])->OrderBy('productName')->get();

        echo '<option value="">-----select Product---</option>';
        foreach ($models as $product) {

            echo '<option value="' . $product->id . '">' . $product->productName . '</option>';
        }
    }
}
