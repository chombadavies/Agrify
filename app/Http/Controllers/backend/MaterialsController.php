<?php

namespace App\Http\Controllers\backend;

use App\Models\Material;
use App\Models\ValueChain;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;


class MaterialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['page_title']='Dissemination Materials';
        return view('admin.materials.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $valuechains= ValueChain::all();
        $data['page_title']= 'Dissemination Materials';
        return view('admin.materials.create',$data)->with(compact('valuechains'));
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
      
        $files = $data['pdf'];
          
        foreach ( $files as $key => $value) {

            $pdf = $files[$key];
        
            $file_tmp = $pdf;
                
                    // Get Image Extension
                    $file_name = $file_tmp->getClientOriginalName();
                    // Generate New Image Name

                  $name = pathinfo($file_name, PATHINFO_FILENAME);  
                  
                    $filePath = 'backend/uploads/'.$name;
                    // Upload the Image
                    $file_tmp->move(public_path('file uploads'), $name);
                   

                $material = new Material();
              
                $material->title = $name;
                $material->value_chain_id = $data['valuechain_id'];
                $material->pdf = $filePath;
               $material->save();
            
        }

return redirect()->route('materials.index')->with('succuss','pdf uploadded successfully');
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
        $material=Material::findOrFail($id);
        $valuechains=ValueChain::all();
      return view('admin.materials.edit')->with(compact('material','valuechains'));
       
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
        $material=Material::findOrFail($id);
                   
       $material->fill($data)->save();
    
        
   return redirect()->route('materials.index')->with('succuss','file edited successfully');
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


    public function fetchMaterials(){

        $models = DB::table('materials')
        ->join('value_chains','materials.value_chain_id','=','value_chains.id')
        ->select('materials.id', 'value_chains.title as valuechain', 'materials.title','materials.status')
        ->get();


        return Datatables::of($models)
           ->rawColumns(['action'])
         

            ->addColumn('action', function ($model) {
                $edit_url = route('materials.edit',$model->id);
             return '<div class="dropdown ">
        <button class="btn btn-pink btn btn-xs dropdown-toggle" type="button" data-toggle="dropdown">Action
        <span class="caret"></span></button>
        <ul class="dropdown-menu">
        <li><a  style="cursor:pointer;" class="reject-modal" data-title="Edit Material" data-url="' . $edit_url . '">Edit Material</a></li>
      
        </div> ';

            })
            ->make(true);
    }
}
