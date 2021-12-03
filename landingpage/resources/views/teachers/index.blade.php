@extends ('layouts.app')

@section ('content')

 <!--Slides-->

 <div id="teachers" class="z-0 text-center p-15 bg-white-700 text-black">
        <h2 class="text-4xl font-bold py-10 uppercase">
            Our Teachers
        </h2>

          @if (Auth::check())
            <div class="pt-15 mb-4">
              <a 
                href="/teachers/create" 
                class="bg-blue-500 uppercase text-gray-100 text-xs font-extrabold py-3 px-5 rounded-2xl" style="float: right">
                Add New Teacher
              </a>
            </div>
          @endif
          <br>
          <br>

        <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">

            @foreach ($teachers as $teacher)
            <!--Card-->
            <div class="rounded-full overflow-hidden bg-gray rounded">

            @if (Auth::check())
            <a href="/teachers/{{$teacher->id}}/edit">
              <img class="h-80 w-full rounded-full" src="/images/{{$teacher->image_path}}" alt="">
            </a>
            @else
            <img class="h-80 w-full rounded-full" src="/images/{{$teacher->image_path}}" alt="">
            @endif

              <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2 text-gray-800">{{$teacher->title}}</div>
              </div>
            </div>
            @endforeach

            </div> 
        </div>
    </div>

@endsection