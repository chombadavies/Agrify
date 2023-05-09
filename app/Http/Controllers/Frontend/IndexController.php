<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ValueChain;
use App\Models\Partner;
use App\Models\Project;
use App\Models\Research;
use App\Models\Category;

class IndexController extends Controller
{
    public function home(){
        $valuechains=ValueChain::all();
        $partners=Partner::all();
       
        return view('frontend.index',compact('valuechains','partners'));
    }

    public function about(){
return view('frontend.pages.about');
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
    public function Partner($id){

        $partner=Partner::findOrFail($id);
        // dd($partner->projects);
       return view('frontend.pages.partner_profile',compact('partner'));
    }

    public function Media(){

        return view('frontend.pages.media');
    }

    public function Resources(){
        $data['page_title']='Resources';
        return view('frontend.pages.resources',$data);
    }

    public function crops(){
        $data['page_title']='Value Chains';
    $valuechains=Valuechain::where('category', 'crops')->get();

    return view('frontend.pages.valuechains',$data)->with(compact('valuechains'));

    }
    public function achievements(){
        $data['page_title']='Achievements';
        return view('frontend.pages.achievements',$data);
    }

    public function dashboard(){
        $data['page_title']='Dashboard';
        return view('frontend.pages.dashboard',$data);
    }
    public function Research($id){

       $category=Category::findOrFail($id);
     
        $data['page_title']='Research Activities';
        
        return view('frontend.pages.research',$data)->with(compact('category'));
    }
}
