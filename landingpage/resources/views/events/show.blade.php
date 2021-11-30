@extends('layouts.app')

@section('content')

@if (Auth::check())
        <div class="pt-10 mr-5" style="float: right;">
            <a 
                href="/events{{$event->id}}" 
                  class="bg-blue-500 uppercase text-gray-100 text-xs font-extrabold py-3 px-5 rounded-2xl">
                Edit
            </a>
        </div>
        @endif

<div class="container-fluid">
    <div class="w-4/5 m-auto text-left">
        <div class="py-15">
            <h1 class="text-left font-bold uppercase" style="font-size: 28px;">{{$event->title}}</h1>
        </div>
    </div>

    <div>
        <img src="/images/{{$event->image_path}}" class="rounded mx-auto img-fluid" alt="" style="max-height: 400px; min-width: 300px;">
    </div>

    <div class="card mt-3">
        <div class="card-body">
        {{$event->content}}
        </div>
    </div>
</div>
    
    

@endsection