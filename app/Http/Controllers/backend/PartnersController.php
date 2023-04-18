<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Partner;
use Session;
use DB;
use Intervention\Image\Facades\Image;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Str;

class PartnersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['page_title']='AgrFi Partners';
        return view('admin.partners.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['page_title']='create Partner';
        return view('admin.partners.create',$data);
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
     $partner=Partner::create($data);

     if($partner){
        Session::flash('success_message', 'service added successfully');
        return redirect()->route('partners.index');
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

    public function fetchPartners()
    {
       
        $models = DB::select('SELECT * FROM `partners`');
        
        
        // $models = Service::whereNotNull('parent_id')->orderBy('id','asc')->get();
      
        return Datatables::of($models)
           ->rawColumns(['action','photo'])
           ->editColumn('photo',function($model){
               $name=$model->image;
               $path=asset('backend/uploads/'.$name);
               return '<img src="'.$path.'" width="70px;" height="70px;"  alt="Service image" >';
           })

           ->editColumn('description',function($model){
            $description=strip_tags($model->description);
            
            return $description;
        })
            ->addColumn('action', function ($model) {
                $edit_url = route('partners.edit',$model->id);
                $view_url = route('partners.show',$model->id);
             
              

                return '<div class="dropdown ">
        <button class="btn btn-pink btn btn-xs dropdown-toggle" type="button" data-toggle="dropdown">Action
        <span class="caret"></span></button>
        <ul class="dropdown-menu">
        <li><a style="cursor:pointer;" class="reject-modal" data-title="Edit" data-url="' . $edit_url . '">Edit Partner</a></li>

        </ul>
        </div> ';

            })
            ->make(true);
    }
}
