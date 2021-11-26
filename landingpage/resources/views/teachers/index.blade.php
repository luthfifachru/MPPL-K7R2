@extends ('layouts.app')

@section ('content')

 <!--Slides-->
      <div class="carousel-inner" role="listbox">
        @if (Auth::check())
          <div class="pt-15 w-4/5 m-3">
            <a 
              href="/teachers/create" 
              class="bg-blue-500 uppercase text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
              Create Post
            </a>
          </div>
        @endif
        <!--Card List 1-->
        <div class="carousel-item active">

          <div class="col-md-3" style="float:left">
           <div class="card mb-2">
              <img class="card-img-top"
                src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
              <div class="card-body ">
                <h4 class="card-title">Card title</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
              </div>
            </div>
          </div>

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
            </div>
          </div>
          @endforeach

        </div>
        <!--/.Card List 1-->
        </div>


@endsection