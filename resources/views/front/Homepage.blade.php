@extends('frontlayout')

@section('content')

<div class="bg" style="width: 100%; height: 80%;opacity:60%;">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                        </ol>
                        <div class="carousel-inner"  style="margin-top: 50px;">
                          <div class="carousel-item active">
                            <img src="images/resort.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="images/resort2.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="images/resort3.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="images/resort4.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="images/resort5.jpg" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        </button>
                      </div> 
</div>
  
             
<nav style="margin-top: 200px;">    
                <div class="container">
                    <div class="row">
                      <Form class="row" action="{{ route('get.post') }}" method="POST">
                        @csrf
                        <center class="centered" > 
                          
                         <div class="container">
                           <div class="row">
                              <div class="col">
                                  <label for="checkIn" class="font-weight-bold" style="color:black;">CHECK IN DATE:</label>
                                  <input class="form-control" type = "date" name = "checkIn" placeholder = "check-in-date" style="color:black;"
                                  value="mm/dd/yy"
                                  min="mm/dd/yy" max="mm/dd/yy">
                              </div>

                              <div class="col">
                                  <label for="checkOut" class="font-weight-bold" style="color:black;">CHECK IN OUT:</label>
                                  <input class="form-control" type = "date" name = "checkOut" placeholder = "check-out-date" style="color:black;"
                                  value="mm/dd/yy"
                                  min="mm/dd/yy" max="mm/dd/yy">
                              </div>
                                    
                              <div class="col">
                                      <a class="font-weight-bold" style="color:black;"> ADULT </a>
                                      <input style=""class="form-control" type="number" name="numberAdult" style="color:black;" id="numberInput" max="20" min="1" step="1" value="2">
                              </div> <!-- ADULT -->
                        

                              <div class="col">
                                      <a class="font-weight-bold" style="color:black;"> CHILD </a>
                                      <input class="form-control" type="number" name="numberChild" style="color:black;" id="numberInput" max="20" min="0" step="1" value="0">
                              </div> <!-- CHILDREN -->
                              
                              <div class="col" style="margin-top:20px;">
                                  <button class="w-100 btn btn-lg btn-outline-success"type="submit" >
                                    BOOK NOW
                                  </button>
                              </div>
                           </div>
                         </div>
     
                        </center>
                        @if(Session::get('Fail'))
                          <div class="alert alert-danger">
                              {{ Session::get('Fail') }}
                          </div>
                        @endif
                      </Form><!-- FORM -->
                  </div>
              </div>
          </nav>


          <div class="container">
                  <div class="row">
                    <div class="col" >
                      <div class="row row-cols-1 row-cols-md-2">
                        <div class="col mb-4">
                          <div class="card">
                            <img src="images/q1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            </div>
                          </div>
                        </div>
                        <div class="col mb-4">
                          <div class="card">
                            <img src="images/q2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>

                <div class="container">
                  <div class="row">
                    <div class="col">
                      <div class="row row-cols-1 row-cols-md-2">
                        <div class="col mb-4">
                          <div class="card">
                            <img src="images/q3.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            </div>
                          </div>
                        </div>
                        <div class="col mb-4">
                          <div class="card">
                            <img src="images/q4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>

                <div class="container">
                  <div class="row">
                    <div class="col">
                      <div class="row row-cols-1 row-cols-md-2">
                        <div class="col mb-4">
                          <div class="card">
                            <img src="images/q5.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            </div>
                          </div>
                        </div>
                        <div class="col mb-4">
                          <div class="card">
                            <img src="images/q6.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>

                
</div>


        
@endsection
