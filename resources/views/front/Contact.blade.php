@extends('frontlayout')
         
@section('content')

<div class="bg" style="width: 90%; height: 80%; margin-left: 70px;" >
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
                    <center>
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                          </ol>
                    </center>
                        <div class="carousel-inner"  style="margin-top: 50px;">
                          <div class="carousel-item active">
                            <img src="images/beach.jpg" style="height: 700px; width: 500px;"class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="images/beach1.jpg" style="height: 700px; width: 500px;" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="images/beach3.jpg" style="height: 700px; width: 500px;"class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="images/beach4.jpg" style="height: 700px; width: 500px;"class="d-block w-100" alt="...">
                          </div>
                        </div>
                        </button>
                      </div> 
</div>
            <center>
                <div class="container" style="margin-top: 50px;" >
                    <div class="card mb-3" >
                        <div class="row no-gutters">
                        <div class="col-md-8">
                            <div class="card-body" style="margin-left: 300px; font-size: 15px;">
                                <h5 class="card-title" style="font-size: 15px;">SSG RESORT WATAPAMPAM</h5>
                                <p class="card-text"></p>
                                <div class="contact" style="margin-top: 100px">
                                    <h7>ADDRESS:</h7>
                                    <h8>4 STREET AVENNUE, DIAMOND</h8>
                                    <h7>CONTACT NUMBER:</h7>
                                    <h8>(10)1258-456-102</h8>
                                    <h7>EMAIL::</h7>
                                    <h8>ssgresortwatapampam@gmail.com</h8>
                                </div>
                                <div class="social-media" style="margin-top: 100px">
                                    <a href="https://www.facebook.com/cycyulike" class="social-media-facebook">FACEBOOK</a>
                                    <a href="https://twitter.com/home" class="social-media-twitter">TWITTER</a>
                                    <a href="https://www.instagram.com/?hl=en" class="social-media-instagram">INSTAGRAM</a>   
                                </div>
                            </div>                   
                            </div>
                            </div>
                    </div>
                </div>
             </center>
@endsection        