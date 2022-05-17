@extends('frontlayout')

@section('content')
<div class="body-header">
                <div class="container">
                  <div class="row">
                    <div class="col">
                      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner"  style="margin-top: 50px;">
                          <div class="carousel-item active">
                            <img src="images/in.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="images/iop.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="images/it.jpg" class="d-block w-100" alt="...">
                          </div>
                        </div>
                      </div>   
                      </div>
                    </div>
                </div>

                <div class="jumbotron jumbotron-fluid" style="margin-top:30px; margin-right: 30px; margin-left: 30px">
                  <div class="container">
                    <h1 class="display-4">SSG RESORT</h1>
                    <p class="lead"  style="font-size: 20px">Indulge yourself to our resort, experience the presence of the nature. 
                    having a warm welcome, having the best services, accomodation and relaxation rooms that you
                    can relax to. Where you can also meditate, having time for yourself and letting yourself
                    enjoy the view. Also alongsode of those meditationg, you can also experience scuba diving, 
                    participate the enchanted spa, and engaging yourself to do the activities or by simply
                    relax at the poolside reading books, star seeing and making a beautiful memories with us.</p>
                  </div>
                </div>

                <div class="container">
                  <div class="row">
                    <div class="col" style="margin-top: 30px;">
                      <div class="row row-cols-1 row-cols-md-2">
                        <div class="col mb-4">
                          <div class="card">
                            <img src="images/service.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            <center>
                              <h5 class="card-title">SERVCES</h5>
                            </center>
                              <p class="card-text">HAVING A GOOD SERVICE AND ACCOMADATION TO OUR CUSTOMERS.</p>
                            </div>
                          </div>
                        </div>
                        <div class="col mb-4">
                          <div class="card">
                            <img src="images/Bar.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            <center>
                              <h5 class="card-title">BAR</h5>
                            </center>
                              <p class="card-text">SERVING A GOOD DRINKS AND ALSO WE SERVE A GOOD BEVERAGE</p>
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>

                <div class="container">
                  <div class="row">
                    <div class="col" style="margin-top: 30px;">
                      <div class="row row-cols-1 row-cols-md-2">
                        <div class="col mb-4">
                          <div class="card">
                            <img src="images/resto.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            <center>
                              <h5 class="card-title">RESTAURANTS</h5>
                            </center>
                              <p class="card-text">FRESHLY FOODS AND HAVE A GOOD SIGHT SEEING TOGETHER WITH THE NATURE.</p>
                            </div>
                          </div>
                        </div>
                        <div class="col mb-4">
                          <div class="card">
                            <img src="images/room.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            <center>
                              <h5 class="card-title">ROOMS  </h5>
                            </center>
                              <p class="card-text">HAVING A GOOD CONDITION AND ALSO HAVING THE AESTHETIC AMBIANCE TO RELAX.</p>
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
</div>

              <div class="jumbotron" style="margin-top: 40px; ">
                <h1 class="display-4">BOOK NOW WITH US!</h1>
                <p class="lead">WE ARE HAPPY TO ACCOMDATE AND CATER YOUR RELAXATION WITH US !</p>
                <hr class="my-4">
                <a class="btn btn-primary btn-lg" href="http://127.0.0.1:8000/#" role="button">BOOK NOW !</a>
              </div>
@endsection