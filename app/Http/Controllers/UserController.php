<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Auth;
use DB;
use App\Helpers\SystemAudit;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Yajra\Datatables\Datatables;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data['page_title']='Users';
        return view('admin.users.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $data['page_title']='users';
    $roles=Role::all();
 
    // dd($branches);
        return view('admin.users.create',$data)->with(compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

   
  

    
    public function store(Request $request)
    {  
      $validated= $request->validate([
            'name'=>'string','max:255',
            'email'=>'email','string','unique:users',
            'phone'=>'numeric','max:14','min:14',
            'password'=>'string','min:8','confirmed',  
        ]);

        $data=$request->all();
       $roles = $data['role_id'];
        $user=User::create($data);
        $user->assignRole($roles);

        $usermodel = Auth::user();
        $event_name = "Created";
        $description = $usermodel->name . ",created account for " . $user->name . " and assigned  role " . $roles;
        $severity = "Critical";
        $ip = $request->ip();
        SystemAudit::CreateEvent($usermodel, $event_name, $description, $severity, $ip);

        if($user){
            return redirect()->route('users.index')->with('success','user added Successfully');
        }else{
            return back()->with('error','failed please try again');
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
        $user=User::find($id);
   
        $roles=Role::all();
        // dd($user->roles);
        $branches=Branch::all();
            return view('admin.users.edit',compact('roles','branches','user'));
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
    //   return  $data;
        $user=User::find($id);
        $roles = $data['role_id'];
        $user->update($data);
        $user->syncRoles($roles);

        $usermodel = Auth::user();
        $event_name = "Updated";
        $description = $usermodel->name . ",updated account for " . $user->name . " and assigned  role " . $roles;
        $severity = "Critical";
        $ip = $request->ip();
        SystemAudit::CreateEvent($usermodel, $event_name, $description, $severity, $ip);

        if($user){
            return redirect()->route('users.index')->with('success','user Updated Successfully');
        }else{
            return back()->with('error','failed please try again');
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

   
        public function fetchUsers()
        {
            $models = DB::table('users')
            ->join('roles', 'users.role_id', '=', 'roles.id')
            ->join('branches', 'users.branch_id', '=', 'branches.id')
            ->select('users.id', 'users.name', 'roles.name as rolename','branches.name as branchname', 'users.email')
            ->get();
            return Datatables::of($models)
               ->rawColumns(['action'])
                ->addColumn('action', function ($model) {
                    $edit_url = route('users.edit',$model->id);
                    
                 return '<div class="dropdown ">
            <button class="btn btn-pink btn btn-xs dropdown-toggle" type="button" data-toggle="dropdown">Action
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
            <li><a style="cursor:pointer;" class="reject-modal"  data-title="Edit" data-url="' . $edit_url . '">Edit Details</a></li>

            </ul>
            </div> ';
    
                })
                ->make(true);
        }
    
}
