<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ImpactArea;

class ImpactAreasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['page_title']='Impact Areas';
        return view('admin.impactareas.create',$data);
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
        // dd($data);
        $impactarea=ImpactArea::create($data);
        return redirect()->route('impactareas.create')->with('success','Impact Area added successfully');
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

    public function fetchImapctAreas()
{
    $models = ImapctAreas::all();

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
