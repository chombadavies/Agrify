<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Research;
use App\Models\Category;
use App\Models\ImpactArea;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Str;
use Session;
use DB;


class ResearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $research_activities =Research::all();
        $data['page_title']='Research Activities';
        return view('admin.research.index',$data)->with(compact('research_activities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['page_title']='Research Models';
        $categories=Category::all();
      
        return view('admin.research.create',$data)->with(compact('categories'));
 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->all();
        $question=Research::create($data);
        return redirect()->route('research.index')->with('success','research added successfully');



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
                Image::make($image_tmp)->resize(300,280)->save($ImagePath);
               
            }
        } else {
            $image = "";
            $ImagePath= "";
            
        }

        $data=$request->all();
        $data['image']=$image;
      
      
    //    dd($data);
        $status=Research::create($data);

        if($status){
         
            return redirect()->route('research.index')->with('success','research added successfully');
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
     
        $research_activity=Research::findOrFail($id);
        $categories=Category::all();
        $data['page_title']='Edit Research Activity';
     return view('admin.research.edit',$data)->with(compact('research_activity','categories'));
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
        $research = Research::findOrFail($id);
   
        if ($request->hasFile('image')) {
            $destination='backend/uploads/'.$research->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
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
            $image= $research->image;
            $ImagePath = "";
            
        }

        if ($request->hasFile('details_image')) {
            $destination='backend/uploads/'.$research->details_image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $image_tmp = $request->file('details_image');
            if ($image_tmp->isValid()) {
                // Get Image Extension
                $extension = $image_tmp->getClientOriginalExtension();
                // Generate New Image Name
                $details_image = rand(111, 99999) . '.' . $extension;
                $ImagePath = 'backend/uploads/'.$details_image;
                // Upload the Image
                Image::make($image_tmp)->save($ImagePath);
               
            }
        } else {
            $details_image = $research->details_image;
           
            
        }
      $data['image']=$image;
      $data['details_image']=$details_image;
     
      $status=$research->fill($data)->save();

     if($status){
        Session::flash('success_message', 'Research Activity updated successfully');
        return redirect()->route('research.index');
     }else{
        return back()->with('error','operation failed,lease try again.');
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

 
    public function fetchResearch()
    {
        $models = DB::table('research')
        ->join('categories', 'research.category_id', '=', 'categories.id')
        ->select('research.id', 'categories.title', 'research.alias as meme','research.description','research.image as photo','research.status')
        ->get();

        return Datatables::of($models)
        ->rawColumns(['action','image','description'])
        ->editColumn('image',function($model){
         $name=$model->photo;
         $path=asset($name);
        return '<img src="'.$path.'" width="70px;" height="70px;"  alt="category image" >';
        })
        ->editColumn('description',function($model){
            $text=$model->description;
            $description=str_limit(strip_tags($text),$limit=50,$end='...');
             return $description;
           })
            ->addColumn('action', function ($model) {
                $edit_url = route('research.edit',$model->id);
                
             return '<div class="dropdown ">
        <button class="btn btn-pink btn btn-xs dropdown-toggle" type="button" data-toggle="dropdown">Action
        <span class="caret"></span></button>
        <ul class="dropdown-menu">
        <li><a style="cursor:pointer;" data-title="Edit" href="' . $edit_url . '">Edit Research Actitvity</a></li>
        </ul>
        </div> ';

            })
            ->make(true);
    }

  
}
