@extends('layouts.app')

@section('content')
IMAGE = {{$event->image_path}}
<h1>{{$event->title}}</h1>

<p>{{$event->content}}</p>

@endsection