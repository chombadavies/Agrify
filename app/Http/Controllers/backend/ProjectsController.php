<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Partner;
use App\Models\Project;
use Session;
use DB;
use Intervention\Image\Facades\Image;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Str;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['page_title']='Projects';
        return view('admin.projects.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['page_title']='Create Project';
        $partners=Partner::all();
        return view('admin.projects.create',$data)->with(compact('partners'));
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
            $image= "";
            $ImagePath = "";
            
        }
      $data['image']=$image;
     $partner=Project::create($data);

      Session::flash('success_message', 'project added successfully');
        return redirect()->route('projects.index');
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
        $data['page_title']="Edit Project details";
        $project=Project::findOrFail($id);
        $partners=Partner::all();
        return view('admin.projects.edit',$data)->with(compact('project','partners'));
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
            $image= "";
            $ImagePath = "";
            
        }
      $data['image']=$image;
      $partner = Project::findOrFail($id);
      $status=$partner->fill($data)->save();

     if($status){
        Session::flash('success_message', 'Project updated successfully');
        return redirect()->route('projects.index');
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

    public function fetchProjects()
    {
      
        $models = DB::table('projects')
        ->join('partners', 'projects.partner_id', '=', 'partners.id')
        ->select('projects.id', 'partners.title', 'projects.title as meme','projects.description','projects.image as photo')
        ->get();


        return Datatables::of($models)
           ->rawColumns(['action','photo'])
        
           ->editColumn('photo',function($model){
               $name=$model->photo;
               $path=asset('backend/uploads/'.$name);
               return '<img src="'.$path.'" width="70px;" height="70px;"  alt="Project image" >';
           })

           ->editColumn('description',function($model){
            $description=strip_tags($model->description);
            
            return $description;
        })
            ->addColumn('action', function ($model) {
                $edit_url = route('projects.edit',$model->id);
                $view_url = route('projects.show',$model->id);
             
              

                return '<div class="dropdown ">
        <button class="btn btn-pink btn btn-xs dropdown-toggle" type="button" data-toggle="dropdown">Action
        <span class="caret"></span></button>
        <ul class="dropdown-menu">
        <li><a style="cursor:pointer;" data-title="Edit" href="' . $edit_url . '">Edit Project</a></li>
        <li><div class="dropdown-divider"></div></li>
        <li><a  style="cursor:pointer;" class="reject-modal" data-title="Show projects" data-url="' . $view_url . '">View Partner</a></li>
        </ul>
        </div> ';

            })
            ->make(true);
    }
}
