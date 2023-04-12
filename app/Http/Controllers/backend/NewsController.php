<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use DateTime;
use App\Models\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'this is the index';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['page_title']="Create Blog";
        return view('admin.news.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
            $summeryImagePath = "";
            
        }

        $data=$request->all();
        $data['image']=$image;
        $data['publish_date']=new DateTime('now');
        $data['user_id']= Auth()->user()->id;
     
        $status=News::create($data);

        if($status){
         
            return redirect()->route('news.index')->with('success','blog saved Successfully');
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

    public function fetchBlogs()
    {
      $models = DB::table('blogs')
                    ->join('users', 'blogs.user_id', '=', 'users.id')
                    ->select('blogs.id', 'users.name as owner','blogs.status', 'blogs.title','blogs.summery','blogs.image','blogs.publish_date')
                    ->where('blogs.status','active')
                    ->orderBy('id','ASC')
                    ->get();
                 
               
        return Datatables::of($models)
           ->rawColumns(['action','image','summery'])
           ->editColumn('image',function($model){
            $name=$model->image;
            $path=asset('backend/uploads/'.$name);
           return '<img src="'.$path.'" width="70px;" height="70px;"  alt="category image" >';
           })
           ->editColumn('summery',function($model){
            $text=$model->summery;
            $summery=strip_tags($text);
             return $summery;
           })
            ->addColumn('action', function ($model) {
                $edit_url = route('blogs.edit',$model->id);
             
              return '<div class="dropdown ">
        <button class="btn btn-pink btn btn-xs dropdown-toggle" type="button" data-toggle="dropdown">Action
        <span class="caret"></span></button>
        <ul class="dropdown-menu">
        <li><a style="cursor:pointer;"   data-title="Edit Details" href="' . $edit_url . '">Edit Blog </a></li>
        <li><div class="dropdown-divider"></div></li>
      
    
        </ul>
        </div> ';
    
            })
            ->make(true);
    }
}
