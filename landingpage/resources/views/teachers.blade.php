@extends ('layouts.app')

@section ('content')

 <!--Slides-->
    <p class="text-center font-bold" style="font-size: 28px; font-family: sans-serif">OUR TEACHER</p</h1>

    @if (Auth::check())
      <div class="pt-3 mt-1">
        <a 
          href="/events/create" 
            class="bg-gray-400 uppercase text-gray-100 text-xs font-bold py-3 px-5 mb-3 mr-3 rounded-2xl" style="float: right">
              Add New Teacher
        </a>
      </div>
    @endif
    <br>

      <div class="carousel-inner" role="listbox">

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

        </div>
        <!--/.Card List 1-->
        </div>


@endsection