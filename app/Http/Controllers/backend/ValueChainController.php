<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ValueChain;
use Intervention\Image\Facades\Image;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Session;

class ValueChainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $valuechains =ValueChain::all();
        $data['page_title']='Value Chains';
        return view('admin.valuechains.index',$data)->with(compact('valuechains'));
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

       
        if ($request->hasFile('image')) {

            $image_tmp = $request->file('image');
            if ($image_tmp->isValid()) {
                // Get Image Extension

                // dd('image');
                $extension = $image_tmp->getClientOriginalExtension();
                // Generate New Image Name
                $image = rand(111, 99999) . '.' . $extension;
                $ImagePath = 'backend/uploads/'.$image;
                // Upload the Image
                Image::make($image_tmp)->resize(300,280)->save($ImagePath);
               
            }
        } else {
            $ImagePath= "";
            
        }

        if ($request->hasFile('details_image')) {
            // $destination='backend/uploads/'.$valuechain->details_image;
            // if(File::exists($destination))
            // {
            //     File::delete($destination);
            // }
            $image_tmp = $request->file('details_image');
            if ($image_tmp->isValid()) {
           
                $extension = $image_tmp->getClientOriginalExtension();
                // Generate New Image Name
                $details_image = rand(111, 99999) . '.' . $extension;
               
                $dImagePath ='backend/uploads/'.$details_image;
                // Upload the Image
                Image::make($image_tmp)->save($dImagePath);
               
            }
        } else {
            $dImagePath="";
        }

        $data=$request->all();
        $data['image']=$ImagePath;
        $data['details_image']=$dImagePath;
      
    //    dd($data);
        $status=ValueChain::create($data);
     
        if($status){
         
            return redirect()->route('valuechains.index')->with('success','Value chain Added successfully');
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
        $valuechain=ValueChain::findOrFail($id);
        // dd($valuechain);
        $data['page_title']='Edit Value Chain';
     return view('admin.valuechains.edit',$data)->with(compact('valuechain'));
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
        $data=$request->all();
    
        $valuechain = ValueChain::findOrFail($id);
   
        if ($request->hasFile('image')) {
            
            // $destination='backend/uploads/'.$valuechain->image;
            // if(File::exists($destination))
            // {
            //     File::delete($destination);
            // }
            $image_tmp = $request->file('image');
            if ($image_tmp->isValid()) {
                // Get Image Extension
                $extension = $image_tmp->getClientOriginalExtension();
                // Generate New Image Name
                $image = rand(111, 99999) . '.' . $extension;
                $ImagePath = 'backend/uploads/'.$image;
                // Upload the Image
                
                Image::make($image_tmp)->resize(300,280)->save($ImagePath);
               
            }
        } else {
           
            $ImagePath=$valuechain->image;
        }

        $data['image']=$ImagePath;

        if ($request->hasFile('details_image')) {
            // $destination='backend/uploads/'.$valuechain->details_image;
            // if(File::exists($destination))
            // {
            //     File::delete($destination);
            // }
            $image_tmp = $request->file('details_image');
            if ($image_tmp->isValid()) {
                // Get Image Extension
              
                $extension = $image_tmp->getClientOriginalExtension();
                // Generate New Image Name
                $details_image = rand(111, 99999) . '.' . $extension;
                $dImagePath = 'backend/uploads/'.$details_image;
                
                Image::make($image_tmp)->save($dImagePath);
               
            }
        } else {
          
            $dImagePath=$valuechain->details_image;
        }
       
      $data['details_image']=$dImagePath;

      $valuechain->title= $request->title;
      $valuechain->image= $data['image'];
      $valuechain->details_image= $data['details_image'];
      $valuechain->category= $request->category;
      $valuechain->introduction= $request->introduction;
      $valuechain->description= $request->description;
      $valuechain->save();

      return redirect()->route('valuechains.index')->with('success','Value chain updated successfully');
    

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
         $path=asset($name);
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
        <li><a style="cursor:pointer;" data-title="Edit" href="' . $edit_url . '">Edit Value Chain</a></li>
        </ul>
        </div> ';

            })
            ->make(true);
    }

  
}
