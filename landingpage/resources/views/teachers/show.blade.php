@extends('layouts.app')

@section('content')
IMAGE = {{$teacher->image_path}}
<h1>{{$teacher->title}}</h1>

@if (isset(Auth::user()->id) && Auth::user()->id == $teacher->user_id)
    <span class="float-left">
        <a 
            href="/teachers/{{ $teacher->id }}/edit"
            class="text-gray-700 italic hover:text-gray-900 pb-1 border-b-2">
            Edit
        </a>
    </span>

    <span class="float-left">
         <form 
            action="/teachers/{{ $teacher->id }}"
            method="POST">
            @csrf
            @method('delete')

            <button
                class="text-red-500 pr-3"
                type="submit">
                Delete
            </button>

        </form>
    </span>
@endif
@endsection