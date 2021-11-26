@extends('layouts.app')

@section('content')
IMAGE = {{$teacher->image_path}}
<h1>{{$teacher->title}}</h1>


@endsection