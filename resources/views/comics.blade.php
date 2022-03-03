@extends('layouts.app')

@section('page-title','Home Page')

@section('fumetti')
    
        
            @foreach ($comics as $key => $element)
                <div class="ms_boxfumetti">
                    <img src="{{$element["thumb"]}}" alt="">
                    <span>{{$element["series"]}}</span>
                </div>
            @endforeach
            
        
    
@endsection