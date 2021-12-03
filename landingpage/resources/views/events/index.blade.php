@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
<body>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Main Content -->
    <div class="container-fluid py-5 mt-5">
          <div class="container">
            <div class="text-center">
              <h1 class="mb-5">Event Post</h1>
            </div>

            @if (Auth::check())
              <div class="pt-15 w-4/5 m-3">
                <a 
                  href="/events/create" 
                  class="bg-blue-500 uppercase text-gray-100 text-xs font-extrabold py-3 px-5 rounded-2xl">
                  Create Post
                </a>
              </div>
            @endif
            <br>
            <br>
          
          </div>
      </div>   

@foreach ($events as $event)  
    <!-- Main Content -->
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-3 border-b border-gray-200">
        <div>
            <img src="/images/{{$event->image_path}}" width="700" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h1 class="text-3xl font-extrabold text-gray-600">
            {{$event->title}}
            </h1>
            
            <p class="py-8 text-gray-500 text-s">
            {{\Illuminate\Support\Str::words($event->content, 50 )}}
            </p>
            <br>
            <br>

            <a 
              href="/events/{{$event->id}}"
              class="bg-blue-500 uppercase text-gray-100 text-xs font-extrabold py-3 px-5 rounded-2xl">
              Detail
            </a>  
        </div>
    </div>
</div>   
    
    <!-- End Main Content -->
@endforeach
</body>
</html>
@endsection