@extends ('layouts.app')

@section ('content')

 <!--Slides-->
  <div class="text-center">
    <h1 class="font-bold mb-auto" style="font-size: 36px; font-family: sans-serif">Our Teacher</h1>
  </div>

      <div class="carousel-inner" role="listbox">
        @if (Auth::check())
          <div class="pt-15 mb-4">
            <a 
              href="/teachers/create" 
              class="bg-gray-400 uppercase text-gray-100 text-xs font-extrabold py-3 px-5 mr-5 rounded-2xl" style="float: right">
              Add New Teacher
            </a>
          </div>
        @endif
        <br>
        <br>
        <!--Card List 1-->
        <div class="carousel-item active">

          @foreach ($teachers as $teacher)
          <div class="col-md-3" style="float:left">
           <div class="card mb-2">
              <img class="card-img-top"
                src="/images/{{$teacher->image_path}}" alt="Card image cap">
              <div class="card-body ">
                <h4 class="card-title">{{$teacher->title}}</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
              </div>

              @if (Auth::check())
              <div class="pt-15 w-4/5 m-3">
                <a 
                  href="/teachers/Detail" 
                  class="bg-blue-500 uppercase text-gray-100 text-xs font-extrabold py-3 px-5 rounded-2xl">
                  Edit
                </a>
              </div>
            @endif
            </div>
          </div>
          @endforeach

        </div>
        <!--/.Card List 1-->
        </div>


@endsection