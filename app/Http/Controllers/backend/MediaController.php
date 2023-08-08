<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Media;
use DB;
use Intervention\Image\Facades\Image;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\File;
class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['page_title']='Media';
        return view('admin.media.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $data['page_title']="Create Media";
        return view('admin.media.create',$data);
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
                $extension = $image_tmp->getClientOriginalExtension();
                // Generate New Image Name
                $image = rand(111, 99999) . '.' . $extension;
                $ImagePath = 'backend/uploads/'.$image;
                // Upload the Image
                Image::make($image_tmp)->save($ImagePath);
            }
        }
        
        else {
            $image = null;
            // $videolink =$request->video_link ;          
        }

      
        $data['image']=$image;
        $data['type']=$request->type;
    
        $status=Media::create($data);

        if($status){
         
            return redirect()->route('media.index')->with('success','media saved Successfully');
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
        $data['page_title']="Edit Media";
        $media=Media::findOrFail($id);
        return view('admin.media.edit',$data)->with(compact('media'));
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
        $data =$request->all();
        $media=Media::findOrFail($id);
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
        }
        
        else {
            $image = $media->image;
            // $videolink =$request->video_link ;          
        }

        $data=$request->all();
        $data['image']=$image;
        $data['type']=$request->type;
    
        $status=$media->fill($data)->save();

        if($status){
         
            return redirect()->route('media.index')->with('success','media saved Successfully');
        }else{
            return back()->with('error','failed try again');
        }
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

    public function fetchMedia(){

        $models = DB::select('SELECT * FROM `media`');
        return Datatables::of($models)
           ->rawColumns(['action','image'])
           ->editColumn('image',function($model){
               $name=$model->image;
               $path=asset('backend/uploads/'.$name);
               return '<img src="'.$path.'" width="70px;" height="70px;"  alt="Image" >';
           })

            ->addColumn('action', function ($model) {
                $edit_url = route('media.edit',$model->id);
             return '<div class="dropdown ">
        <button class="btn btn-pink btn btn-xs dropdown-toggle" type="button" data-toggle="dropdown">Action
        <span class="caret"></span></button>
        <ul class="dropdown-menu">
        <li><a style="cursor:pointer;" data-title="Edit" href="' . $edit_url . '">Edit Media</a></li>
      
        </div> ';

            })
            ->make(true);
    }
}
