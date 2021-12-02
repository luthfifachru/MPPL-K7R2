@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Home Schooling Aula MT.KITA 
                </h1>
                <p class="text-center text-dark-700 py-2 px-4 ">
                    <b>Bimbel HomeSchooling Aula M.T KITA</b> merupakan bimbel kecil untuk Playground hingga sampai tingkat Sekolah Menengah Pertama. Bimbel yang dimulai tahun 2008 dengan konsep privat SD ini mulai berkembang pada tahun 2010 hingga naik sampai tingkat SMP dan mulai membuka kelas untuk playground.
                </p>
            </div>
        </div>
    </div>


    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" width="700" alt="">
        </div>

        <div id="about" class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
               Visi Misi Kami
            </h2>
            
            <p class="py-8 text-gray-500 text-s">
                Visi Kami adalam Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur alias tempora laborum libero molestiae quasi dolor rem mollitia voluptatem deleniti explicabo magnam adipisci, harum dolore fugit blanditiis sunt quos reiciendis?
            </p>

            <p class="py-2 text-gray-500 text-s">
                Misi Kami adalah Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores optio alias hic necessitatibus sequi ex aspernatur aliquam vero atque nesciunt repellat dignissimos voluptate quidem assumenda consequatur quisquam eveniet nostrum, cum.
            </p>
            <br>
            <br>
            <a 
                href="/blog"
                class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>

    <!--Section Teachers-->
    <div id="teachers" class="z-0 text-center p-15 bg-gray-800 text-white">
        <h2 class="text-4xl font-bold py-10">
            Teachers
        </h2>

        <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">

    @foreach ($teachers as $teacher)
    <!--Card-->
    <div class="rounded overflow-hidden shadow-lg">
      <img class="w-full" src="/images/{{$teacher->image_path}}" alt="Teachers">
      <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">{{$teacher->title}}</div>
      </div>
    </div>
    @endforeach
    


	<!--Section Events-->
    <div id="events" class="text-center">

        <h2 class="text-4xl font-bold py-10">
            Recent Event
        </h2>
    </div>

     <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">
        

    @foreach ($events as $event)
        <!--card-->
        <div class="bg-white shadow-md border border-gray-200 rounded-lg max-w-sm dark:bg-gray-800 dark:border-gray-700">
        <a href="{{$event->id}}">
            <img class="rounded-t-lg" src="/images/{{$event->image_path}}" alt="" />
        </a>
        <div class="p-5">
            <a href="{{$event->id}}">
                <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2 dark:text-white">{{$event->title}}</h5>
            </a>
            <p class="font-normal text-gray-700 mb-3 dark:text-gray-400">{{$event->content}}</p>
            <a href="{{$event->id}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Read more
                <svg class="-mr-1 ml-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
            </div>
            </div>
        </div>
    @endforeach
    

<br>
<br>

 
@endsection