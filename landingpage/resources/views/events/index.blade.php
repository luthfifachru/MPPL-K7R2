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
                  class="bg-blue-500 uppercase text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                  Create Post
                </a>
              </div>
            @endif
            <br>
            <br>
            
            <div class="card" style="width: 500px;">
              <img src="/images/2.jpg" class="card-img-top" alt="">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
      </div>   
    <!-- End Main Content -->
@foreach ($events as $event)  
    <!-- Main Content -->
    <div class="container-fluid py-5 mt-5">
          <div class="container">
            <div class="text-center">
              <h1 class="mb-5">{{$event->title}}</h1>
            </div>
            <div class="card" style="width: 500px;">
              <img src="/images/{{$event->image_path}}" class="img-fluid" alt="">
              <div class="card-body">
                <p class="card-text">{{\Illuminate\Support\Str::words($event->content, 50 )}}</p>
                @if (Auth::check())
              <div class="pt-15 w-4/5 m-3">
                <a 
                  href="/events/{{$event->id}}/edit"
                  class="bg-blue-500 uppercase text-gray-100 text-xs font-extrabold py-3 px-5 rounded-2xl">
                  Detail
                </a>
              </div>
            @endif
              </div>
            </div>
          </div>
      </div>   
    
    <!-- End Main Content -->
@endforeach
</body>
</html>
@endsection