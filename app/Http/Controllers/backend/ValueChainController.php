<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ValueChain;
use Intervention\Image\Facades\Image;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Str;

class ValueChainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['page_title']='Value Chains';
        return view('admin.valuechains.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

       $data['page_title']='create Value Chain';
        return view('admin.valuechains.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data =$request->all();
dd($data);
       
        if ($request->hasFile('image')) {

            $image_tmp = $request->file('image');
            if ($image_tmp->isValid()) {
                // Get Image Extension
                $extension = $image_tmp->getClientOriginalExtension();
                // Generate New Image Name
                $image = rand(111, 99999) . '.' . $extension;
                $ImagePath = 'backend/uploads/'.$image;
                // Upload the Image
                Image::make($image_tmp)->save($ImagePath);
            }
        } else {
            $image = "";
            $ImagePath= "";
            
        }

        $data=$request->all();
        $data['image']=$image;
      
       
        $status=ValueChain::create($data);

        if($status){
         
            return redirect()->route('partners.index')->with('success','Partner created successfully');
        }else{
            return back()->with('error','failed try again');
        }
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
        return $id;
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


public function fetchValuechains()
    {
   $models=ValueChain::all();
        return Datatables::of($models)
        ->rawColumns(['action','image','introduction','description'])
        ->editColumn('image',function($model){
         $name=$model->image;
         $path=asset('backend/uploads/'.$name);
        return '<img src="'.$path.'" width="70px;" height="70px;"  alt="category image" >';
        })
        ->editColumn('introduction',function($model){
         $text=$model->introduction;
         $introduction=str_limit(strip_tags($text), $limit = 50, $end = '...');
          return $introduction;
        })
        ->editColumn('description',function($model){
            $text=$model->description;
            $description=str_limit(strip_tags($text),$limit=50,$end='...');
             return $description;
           })
            ->addColumn('action', function ($model) {
                $edit_url = route('valuechains.edit',$model->id);
                
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
