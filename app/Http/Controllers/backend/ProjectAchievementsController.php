<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Partner;
use App\Models\Project;
use App\Models\ProjectAchievement;
use Yajra\Datatables\Datatables;
use DB;

class ProjectAchievementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['page_title']='Project Achievements';
        return view('admin.achievements.project_achievements_index',$data);
      
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['page_title']='Create Project Achievements';
        $partners=Partner::all();
        return view('admin.achievements.project_achievements_create',$data)->with(compact('partners'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->except('partner_id');
        // dd($data);
        $achievement=ProjectAchievement::create($data);
        return back()->with('success','achievement added successfully');
    
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
       $achievement=ProjectAchievement::findOrFail($id);
       $partners=Partner::all();
       $data['page_title']='Edit Project Achievement';
       return view('admin.achievements.project_achievements_edit',$data)->with(compact('achievement','partners'));
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
        
        $data=$request->except('partner_id');

      
        $achievement=ProjectAchievement::findOrFail($id);
        $status=$achievement->fill($data)->save();
       
        return back()->with('success','Project Achievement Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd($id);
    }

    public function fetchProjectAchievements(){
        // $models = ProjectAchievement::all();

        $models = DB::table('project_achievements')
        ->join('projects','project_achievements.project_id','=','projects.id')
        ->select('project_achievements.id', 'project_achievements.introduction', 'project_achievements.achievements','projects.title as project')
        ->get();

        return Datatables::of($models)
        ->rawColumns(['action','achievements','introduction','project'])
      
        ->editColumn('introduction',function($model){
            $text=$model->introduction;
            $introduction=str_limit(strip_tags($text),$limit=50,$end='...');
             return $introduction;
           })
           ->editColumn('project',function($model){
            $text=$model->project;
            $project=str_limit(strip_tags($text),$limit=50,$end='...');
             return $project;
           })

           ->editColumn('achievements',function($model){
            $text=$model->achievements;
            $achievements=str_limit(strip_tags($text),$limit=50,$end='...');
             return $achievements;
           })
            ->addColumn('action', function ($model) {
                $edit_url = route('project_achievements.edit',$model->id);
              
                $delete_url = route('project_achievements.destroy',$model->id);
                
             return '<div class="dropdown ">
        <button class="btn btn-pink btn btn-xs dropdown-toggle" type="button" data-toggle="dropdown">Action
        <span class="caret"></span></button>
        <ul class="dropdown-menu">
        <li><a style="cursor:pointer;" data-title="Edit" href="' . $edit_url . '">Edit Project Achievement</a></li>
        <li><div class="dropdown-divider"></div></
        <li><a style="cursor:pointer;" data-title="Edit" href="' . $delete_url . '">Edit Project Achievement</a></li>
        </ul>
        </div> ';
    
            })
            ->make(true);
    }

    public function cascadeProjects($id)
    {

        $models = Project::Where(['partner_id' => $id])->get();

        echo '<option value="" selected disabled>-select Project-</option>';

        foreach ($models as $item) {

            echo '<option value="' . $item->id . '">' . $item->title . '</option>';
        }
    }
}