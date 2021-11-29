@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl">
            Edit Event
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

<div class="w-4/5 m-auto pt-5">
    <form 
        action="/teachers/{{$teacher->id}}"
        method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')


        <input class="form-control form-control-lg" type="text" name="title"  value="{{$teacher->title}}" aria-label=".form-control-lg example">

        <div class="mb-3">
            <label for="formFile" class="form-label"></label>
            <input class="form-control" type="file" name="image" id="formFile">
        </div>

        <button    
            type="submit"
            class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-bold py-4 px-8 rounded-2xl">
            Submit Post
        </button>

        <button    
            type="delete"
            class="uppercase mt-15 bg-gray-500 text-blue-100 text-lg font-extrabold py-4 px-8 rounded-2xl">
            Delete
        </button>
    </form>
</div>

@endsection