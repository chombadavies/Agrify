<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ValueChain;

class IndexController extends Controller
{
    public function home(){
        return view('frontend.index');
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
}
