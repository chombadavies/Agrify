<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Research; 
use App\Models\Achievement;
use Session;
use DB;
use Yajra\Datatables\Datatables;


class AchiementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['page_title']='Research Achievements';
        return view('admin.achievements.research_achievements_index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['page_title']='create Research Achievement';
        $research_activities=Research::all();
        return view('admin.achievements.research_achievements_create',$data)->with(compact('research_activities'));
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
     
     $Achievement=Achievement::create($data);
// dd($data);
     if($Achievement){
        Session::flash('success_message', ' added successfully');
        return redirect()->route('research_achievements.create');
     }else{
        return back()->with('error','operation failed,lease try again.');
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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        $data['page_title']='Edit Research Achievement';
        $research_activities=Research::all();
       $achievement=Achievement::findOrFail($id);
     
        return view('admin.achievements.research_achievements_edit',$data)->with(compact('research_activities','achievement'));
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
     
     $achievement=Achievement::findOrFail($id);
     $status=$achievement->fill($data)->save();
// dd($data);
     if($achievement){
        Session::flash('success_message', ' added successfully');
        return redirect()->route('research_achievements.index');
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

    public function fetchResearchAchievements(){

        $models = DB::table('achievements')
        ->join('research','achievements.research_id','=','research.id')
        ->select('achievements.id','research.alias as title','achievements.description','achievements.status')
        ->get();

        return Datatables::of($models)
           ->rawColumns(['action'])
           ->editColumn('description',function($model){
            $text=$model->description;
            $description=str_limit(strip_tags($text),$limit=50,$end='...');
             return $description;
           })
            ->addColumn('action', function ($model) {
                $edit_url = route('research_achievements.edit',$model->id);
              

                return '<div class="dropdown ">
        <button class="btn btn-pink btn btn-xs dropdown-toggle" type="button" data-toggle="dropdown">Action
        <span class="caret"></span></button>
        <ul class="dropdown-menu">
        <li><a style="cursor:pointer;" data-title="Edit Achievement" href="' . $edit_url . '">Edit Achievement</a></li>
        <li><div class="dropdown-divider"></div></li>
       
        </ul>
        </div> ';

            })
            ->make(true);
    }
  
}
