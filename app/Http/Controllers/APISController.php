<?php

namespace App\Http\Controllers;
use App\Models\ValueChain;
use App\Models\Partner;
use Validator;

use Illuminate\Http\Request;

class APISController extends Controller
{
    public function valuechains(Request $request){
      $rule=array(
        'memebr_id'=>'required',
      );

      $validator=Validator::make($request->all(),$rules);
      if($validator->fails()){
        return $validator->errors();
      }else{
        //save data as result
        if($result){
            return ['result'=>'data has been saved'];
        }else{
            return ['result'=>'operation failed'];
        }
      }


        $valuechains=ValueChain::all();
        return response()->json( [
            'status'=>200,
            'valuechains'=>$valuechains
            ] );
    }

    public function valuechainsparams($id){
      
        $valuechain=ValueChain::findOrFail($id);
        return response()->json( [
            'status'=>200,
            'valuechain'=>$valuechain
            ] );
    }
    public function partners(){
        $partners=Partner::all();
        return response()->json([
            'status'=>200,
            'partners'=> $partners
        ]);
    }
    public function partnersparams($id){
        $partner=Partner::findOrFail($id);

        return response()->json([
            'status'=>200,
            'partner'=>$partner
        ]);
    }
}
