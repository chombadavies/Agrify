<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AllAchievement;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Session;

class AllAchievementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['page_title']='Project Overall Achievements';
        return view('admin.achievements.all_achievements_index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['page_title']='create all Achievements';
  
        return view('admin.achievements.all_achievements_create',$data);
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

    //     if ($request->hasFile('first_image')) {

    //         $image_tmp = $request->file('first_image');
    //         if ($image_tmp->isValid()) {
    //             // Get Image Extension
    //             $extension = $image_tmp->getClientOriginalExtension();
    //             // Generate New Image Name
    //             $first_image = rand(111, 99999) . '.' . $extension;
    //             $ImagePath = 'backend/uploads/'.$first_image;
    //             // Upload the Image
    //             Image::make($image_tmp)->save($ImagePath);
               
    //         }
    //     } else {
    //         $first_image= "";           
    //     }

    //     if ($request->hasFile('second_image')) {

    //         $image_tmp = $request->file('second_image');
    //         if ($image_tmp->isValid()) {
    //             // Get Image Extension
    //             $extension = $image_tmp->getClientOriginalExtension();
    //             // Generate New Image Name
    //             $second_image = rand(111, 99999) . '.' . $extension;
    //             $ImagePath = 'backend/uploads/'.$second_image;
    //             // Upload the Image
    //             Image::make($image_tmp)->save($ImagePath);
               
    //         }
    //     } else {
    //         $second_image= "";           
    //     }
    //   $data['first_image']=$first_image;
    //   $data['second_image']=$second_image;
     $allachievement=AllAchievement::create($data);
// dd($data);
     if($allachievement){
        Session::flash('success_message', ' added successfully');
        return redirect()->route('all_achievements.create');
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
}
