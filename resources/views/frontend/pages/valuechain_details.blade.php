@extends('layouts.frontend.master')

@section('content')
    <main>
        @php
            $intro = $valuechain->introduction; 
            $intro = strip_tags($intro); 

            $desc =$valuechain->description; 
            $desc = strip_tags($desc); 
        @endphp

<p>{{$intro}}</p>

        <p>{{$desc}}</p>
    </main>
@endsection