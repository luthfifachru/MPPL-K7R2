@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl">
            Edit Events
        </h1>
    </div>
</div>
 
@if ($errors->any())
    <div class="w-4/5 m-auto">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded-2xl py-4">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif

<div class="w-4/5 m-auto pt-10">
    <form 
        action="/events/{{$event->id}}"
        method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')

       <input class="form-control form-control-lg" type="text" name="title" value="{{$event->title}}" aria-label=".form-control-lg example">


        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label" ></label>
            <textarea class="form-control" name="content" placeholder="Content..." id="exampleFormControlTextarea1" rows="3">{{$event->content}}</textarea>
        </div>

        <div class="mb-3">
            <label for="formFile" class="form-label"></label>
            <input class="form-control" type="file" name="image" id="formFile">
        </div>

    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        <button    
            type="submit"
            class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-bold py-4 px-8 rounded-2xl">
            Submit Post
        </button>
    </form>
    <form 
        action="/events/{{ $event->id }}"
        method="POST">
        @csrf
        @method('delete')

        <button    
            type="delete"
            class="uppercase mt-15 bg-red-500 text-blue-100 text-lg font-extrabold py-4 px-8 rounded-2xl">
            Delete
        </button>
    </form>
    </div>
</div>

@endsection