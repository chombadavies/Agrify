@extends('layouts.frontend.master')

@section('content')

<main>

<div class="container margin_60_35">
       
    <div class="container-fluid mb-5">
        <div class="main_title mb-4">
            <h2>Value Chains</h2>
            <span>Value Chains</span>
        
        </div>
        <div class="row">

            @foreach ($valuechains as $valuechain)
            <div class="col-md-4">
                <div class="box">
                    <div class="our-services settings">
                        <div class="icon"> <img src="{{asset('backend/uploads/'.$valuechain->image)}}" width="100" height="50"> </div>
                        <h4><a href="{{route('valuechain.show', $valuechain->id)}}">{{$valuechain->title}}</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                </div>
            


                {{-- <div class="card bg-dark text-white">
                    <img src="..." class="card-img" alt="...">
                    <div class="card-img-overlay">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <p class="card-text">Last updated 3 mins ago</p>
                    </div>
                  </div> --}}
            </div>
             
            @endforeach
           
         
        </div>
       
    </div>
  
   
</div> 

</main>
@endsection