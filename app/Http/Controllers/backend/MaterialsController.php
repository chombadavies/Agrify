<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ValueChain;
use App\Models\Material;
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
        return "we are at the Materials index file";
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
                    $name = $file_tmp->getClientOriginalName();
                    // Generate New Image Name
                   
                    $filePath = 'backend/uploads/'.$name;
                    // Upload the Image
                    $file_tmp->move(public_path('file uploads'), $name);
                    // Image::make($image_tmp)->save()

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
}
