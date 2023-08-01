<?php

namespace App\Http\Controllers;
use App\Models\ValueChain;
use App\Models\Partner;
use App\Models\Research;
use Validator;
use DB;

use Illuminate\Http\Request;

class APISController extends Controller
{
    public function valuechains(Request $request){
    //   $rules=array(
    //     'memebr_id'=>'required',
    //   );

    //   $validator=Validator::make($request->all(),$rules);
    //   if($validator->fails()){
    //     return $validator->errors();
    //   }else{
    //     //save data as result
    //     if($result){
    //         return ['result'=>'data has been saved'];
    //     }else{
    //         return ['result'=>'operation failed'];
    //     }
    //   }

    with('brand:id,keyword,name,description');
        $valuechains=ValueChain::all();
        // $valuechains=ValueChain::with('id,description,project_overview,url,image,title');
        return response()->json( [
            'status'=>200,
            'valuechains'=>$valuechains
            ] );
    }

    public function valuechainsparams($id){
      
        $valuechain=ValueChain::findOrFail($id);
        $materials=$valuechain->materials;

        unset($valuechain['materials']);
        
        return response()->json( [
            'status'=>200,
            'valuechain'=>$valuechain,
            'materials'=>$materials
            ] );
    }
    public function partners(){
        // with('id,description,project_overview,url,image,title');

        $partners=Partner::all();
        return response()->json([
            'status'=>200,
            'partners'=> $partners
        ]);
    }
    public function partnersparams($id){
        $partner=Partner::findOrFail($id);
    
            $projects=$partner->projects;


            unset($partner->projects);

        return response()->json([
            'status'=>200,
            'partner'=>$partner,
            'projects'=>$projects
        ]);
    }

    public function researchActitity(){
        $research_activities =Research::all();
        return response()->json([
            'status'=>200,
            'research_activities'=>$research_activities,
          
        ]);

    }
    public function researchActitityparams($id){
        $research_activity =Research::findOrFail($id);
       
      $archievements=$research_activity->achievements;
      unset($research_activity->achievements);

        return response()->json([
            'status'=>200,
            'research_activity'=>$research_activity,
            'archievements'=>$archievements
          
        ]);

    }


}
