@extends('layouts.app')

@section('content')

<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-center font-bold uppercase" style="font-size: 28px;">{{$event->title}}</h1>
    </div>
</div>
IMAGE = {{$event->image_path}}
<p>{{$event->content}}</p>

@endsection