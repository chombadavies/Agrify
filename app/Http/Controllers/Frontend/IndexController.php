<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ValueChain;
use App\Models\Partner;
use App\Models\Project;

class IndexController extends Controller
{
    public function home(){
        $valuechains=ValueChain::all();
        $partners=Partner::all();
        return view('frontend.index',compact('valuechains','partners'));
    }

    public function aboutUs(){
return view('frontend.pages.aboutus');
    }

    public function contactUs(){
return view('frontend.pages.contactus');
    }
    public function blog(){
        return view('frontend.pages.blogs');
    }

    public function valuechains(){
        $valuechains=ValueChain::all();
       
        return view('frontend.pages.valuechains',compact('valuechains'));
    }

    public function valuechain($id){
        $valuechain=ValueChain::find($id);

        // dd($valuechain);
        return view('frontend.pages.valuechain_details',compact('valuechain'));
    }

    public function projectDetails($id){
      $project=Project::findOrFail($id);
        return view('frontend.pages.project_details',compact('project'));
    }
    public function partners($id){

        $partner=Partner::findOrFail($id);
        // dd($partner->projects);
       return view('frontend.pages.projects',compact('partner'));
    }

    public function Media(){

        return view('frontend.pages.media');
    }

    public function Resources(){
        return view('frontend.pages.resources');
    }

    public function crops(){
        $data['page_title']='Value Chains';
    $valuechains=Valuechain::where('category', 'crops')->get();

    return view('frontend.pages.valuechains',$data)->with(compact('valuechains'));

    }
}
