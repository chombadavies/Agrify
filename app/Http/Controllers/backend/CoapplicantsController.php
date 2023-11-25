<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Coapplicant;
use Session;
use DB;
use Intervention\Image\Facades\Image;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Str;

class CoapplicantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['page_title']='AgriFI CS APP Co-aplicants';
        return view('admin.coapplicants.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['page_title']='create Co-Applicant';
        return view('admin.coapplicants.create',$data);
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
                Image::make($image_tmp)->resize(300,280)->save($ImagePath);
               
            }
        } else {
            $image= "";
            $ImagePath = "";
            
        }
      $data['image']=$image;
     $coapplicant=Coapplicant::create($data);
// dd($data);
     if($coapplicant){

        return redirect()->route('coapplicants.index')->with('success','Coapplicant added successfully');
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
        dd($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['page_title']="Edit Co-Applicant details";
        $coapplicant=Coapplicant::findOrFail($id);
        
        return view('admin.coapplicants.edit',$data)->with(compact('coapplicant'));
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
        $coapplicant = Coapplicant::findOrFail($id);
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
            $image=$coapplicant->image;
            
        }
        $data['image']=$image;

    
     $status=$coapplicant->fill($data)->save();
// dd($data);
     if($coapplicant){
   
        return redirect()->route('coapplicants.index')->with('success','Coapplicant updated successfully');
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

    public function fetchCoapplicants()
    {
       
        $models = DB::select('SELECT * FROM `coapplicants`');
        
        
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
                $edit_url = route('coapplicants.edit',$model->id);
                $view_url = route('coapplicants.show',$model->id);
             
              

                return '<div class="dropdown ">
        <button class="btn btn-pink btn btn-xs dropdown-toggle" type="button" data-toggle="dropdown">Action
        <span class="caret"></span></button>
        <ul class="dropdown-menu">
        <li><a style="cursor:pointer;" data-title="Edit" href="' . $edit_url . '">Edit Co-applicant</a></li>
        </ul>
        </div> ';

            })
            ->make(true);
    }
}


        // <li><div class="dropdown-divider"></div></li>
        // <li><a  style="cursor:pointer;" class="reject-modal" data-title="Show projects" data-url="' . $view_url . '">View Co-applicant</a></li>