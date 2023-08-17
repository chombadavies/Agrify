<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Partner;
use App\Models\Project;
use App\Models\ProjectAchievement;

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

    public function fetchAllAchievements(){
        $models = AllAchievement::all();

        return Datatables::of($models)
        ->rawColumns(['action','description','introduction'])
      
        ->editColumn('introduction',function($model){
            $text=$model->introduction;
            $introduction=str_limit(strip_tags($text),$limit=50,$end='...');
             return $introduction;
           })

           ->editColumn('description',function($model){
            $text=$model->description;
            $description=str_limit(strip_tags($text),$limit=50,$end='...');
             return $description;
           })
            ->addColumn('action', function ($model) {
                $edit_url = route('all_achievements.edit',$model->id);
                
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

    public function cascadeProjects($id)
    {

        $models = Project::Where(['partner_id' => $id])->get();

        echo '<option value="" selected disabled>-select Project-</option>';

        foreach ($models as $item) {

            echo '<option value="' . $item->id . '">' . $item->title . '</option>';
        }
    }
}
