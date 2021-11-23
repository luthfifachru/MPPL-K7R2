@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
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

        <div class="m-auto sm:m-auto text-left w-4/5 block">
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

    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l"> 
            Teachers
        </h2>
	    <!--Slides-->
	  <div class="carousel-inner" role="listbox">

	    <!--Card List 1-->
	    <div class="carousel-item active">

	      <div class="col-md-3" style="float:left">
	       <div class="card mb-2">
	          <img class="card-img-top"
	            src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
	          <div class="card-body bg-black">
	            <h4 class="card-title">Card title</h4>
	            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
	              card's content.</p>
	            <a class="btn btn-primary">Button</a>
	          </div>
	        </div>
	      </div>

	      <div class="col-md-3" style="float:left">
	        <div class="card mb-2">
	          <img class="card-img-top"
	            src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
	          <div class="card-body bg-black">
	            <h4 class="card-title">Card title</h4>
	            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
	              card's content.</p>
	          </div>
	        </div>
	      </div>

	      <div class="col-md-3" style="float:left">
	        <div class="card mb-2">
	          <img class="card-img-top"
	            src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
	          <div class="card-body bg-black">
	            <h4 class="card-title">Card title</h4>
	            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
	              card's content.</p>
	          </div>
	        </div>
	      </div>
	      
	       <div class="col-md-3" style="float:left">
	       <div class="card mb-2">
	          <img class="card-img-top"
	            src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
	         <div class="card-body bg-black">
	            <h4 class="card-title">Card title</h4>
	            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
	              card's content.</p>          
	          </div>
	        </div>
	      </div>

	    </div>
	    <!--/.Card List 1-->
	    </div>
	</div>
    <div class="text-center py-15">

        <h2 class="text-4xl font-bold py-10">
            Recent Event
        </h2>
    </div>


    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                  <h1>Reward untuk siswa SD dengan nilai terbaik</h1>
                </span>

                <h3 class="text-xl font-bold py-10">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas necessitatibus dolorum error culpa laboriosam. Enim voluptas earum repudiandae consequuntur ad? Expedita labore aspernatur facilis quasi ex? Nemo hic placeat et?
                </h3>

                <a 
                    href=""
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Find Out More
                </a>
            </div>
        </div>
        <div>
            <img src="/images/Siswa SD Nilai Terbaik_2.jpeg" alt="">
        </div>
    </div>

<br>
<br>

      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle" src="/images/Siswa SD Nilai Terbaik.jpeg" alt="Generic placeholder image" width="200" height="200">
            <h2>Reward siswa SD dg nilai terbaik</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="/images/Prokes_TK_A.jpeg" alt="Generic placeholder image" width="200" height="200">
            <h2>Prokes TKA thn ajaran 2021-2022</h2>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="/images/Acara Akhir Tahun_TK_A.jpeg" alt="Generic placeholder image" width="auto" height="auto">
            <h2>Acara akhir thn ajaran 2020-2021 TKA</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
 
@endsection