@extends('layout')

            @section('content')

            @if(Session::get('Fail'))
                      <div class="alert alert-danger">
                          {{ Session::get('Fail') }}
                      </div>
              @endif
              
          <div class="card">
            <a class="btn btn-danger" href="{{ route('homepage') }}" role="button"> Back to Guest Info</a>
          </div>

          <form action="{{ route('final.post') }}" method="POST">
          @csrf
            
            <div class="col" style="margin-top: 50px;" >
              <div class="card-deck">
                <div class="col-sm-3">
                  <div class="card">
                    <div class="card-header">
                        <a class="text-left col font-weight-bold" style="font-size: 20px;">Partial Overview Details</a>
                    </div>
                  </div>
                  <div class="card"> 
                    <div class="card-body">
                        <div class="col text-left">
                          <h6> Check-in:</h6>
                          <input class="form-control" name="checkIn" value="{{ $checkIn }}" readonly> 
                        </div>

                        <div class="col text-left" style="margin-top:20px;">
                          <h6> Check-out:</h6>
                          <input class="form-control" name="checkOut" value="{{ $checkOut }} " readonly> 
                        </div>

                        <div class="col text-left" style="margin-top:20px;">
                          <h6> Duration-of-stay:</h6>
                          <input class="form-control" name="duration" value="{{ $duration }} " readonly> 
                        </div>
                        
                        <div class="col text-left" style="margin-top:20px;">
                          <h6> Group:</h6>

                          <div class="col text-left " style="margin-left:1px;">
                            <p >Adult:&nbsp;&nbsp; </p>
                            <input class="form-control" name="numberAdult" value="{{ $numberAdult }}" readonly>
                          </div>

                          <div class="col text-left" style="margin-left:1px;">
                            <p>Child:&nbsp;&nbsp;  </p>
                            <input class="form-control" name="numberChild" value="{{ $numberChild }}" readonly>
                          </div>
                        </div>
                    </div>  <!-- Card Body -->
                  </div>  <!-- Card -->

                  <div class="card"  style="margin-top:20px;">
                    <div class="card-header">
                        <a class="text-left col font-weight-bold" style="font-size: 20px;">Selected Resort</a>
                    </div>
                  </div>

                  <div class="card"> 
                    <div class="card-body">
                        <div class="col text-left">
                          <a> Resort Name:</a>
                          <input class="form-control" name="Resort_name" value="{{ $resort->Resort_name }}" readonly> 
                        </div>

                        <div class="col text-left">
                          <a> Resort Address:</a>
                          <input class="form-control" name="Resort_Address" value="{{ $resort->Resort_Address }}" readonly>
                        </div>

                        <div class="col text-left">
                          <a> Services:</a>
                          <input class="form-control" name="Services" value="₱ {{ $resort->Services }}" readonly>
                        </div>

                        <div class="col text-left">
                          <a> Houses/Rooms:</a>
                          <input class="form-control" name="Cottages" value="₱ {{ $resort->Cottages }}" readonly>
                        </div>

                        <div class="col text-left">
                          <a> Essentials:</a>
                          <input class="form-control" name="Essentials" value="₱ {{ $resort->Essentials }}" readonly>
                        </div>

                        <div class="col text-left">
                          <a> Per Night:</a>
                          <input class="form-control" name="PerStay" value="₱ {{ $resort->PerStay }}" readonly>
                        </div>

                        <div class="col text-left">
                          <a> Adult Fee:</a>
                          <input class="form-control" name="PerAdult" value="₱ {{ $resort->PerAdult }}" readonly>
                        </div>

                        <div class="col text-left">
                          <a> Child Fee:</a>
                          <input class="form-control" name="PerChild" value="₱ {{ $resort->PerChild }}" readonly>
                        </div>

                        <div class="col text-left" style="margin-top:20px;">
                          <h4 > Total Price:</h4>
                          <input style="color:red" class="form-control font-weight-bold" name="payment_total" value="{{ $total }}" readonly>
                        </div>
                        
                        
                    </div>  <!-- Card Body -->
                  </div>  <!-- Card -->


                  <div class="card" style="margin-top:20px;">
                    <div class="card-header">
                        <a class="text-left col font-weight-bold" style="font-size: 20px;">Guest Information</a>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-body">
                       
                        <div class="col text-left" style="margin-top:20px;">
                          <h4 > Email:</h4>
                          <input class="form-control" name="email" value=" {{ $email }}" readonly>
                        </div>

                        <div class="col text-left" style="margin-top:20px;">
                          <h4 > Username:</h4>
                          <input class="form-control" name="username" value=" {{ $username }}" readonly>
                        </div>
                        
                        <div class="col text-left" style="margin-top:20px;">
                          <h4 > Firstname:</h4>
                          <input class="form-control" name="firstname" value=" {{ $firstname }}" readonly>
                        </div>

                        <div class="col text-left" style="margin-top:20px;">
                          <h4 > Lastname:</h4>
                          <input class="form-control" name="lastname" value=" {{ $lastname }}" readonly>
                        </div>

                        <div class="col text-left" style="margin-top:20px;">
                          <h4 > Address:</h4>
                          <input class="form-control" name="address" value=" {{ $address }}" readonly>
                        </div>

                        <div class="col text-left" style="margin-top:20px;">
                          <h4 > Phone Number:</h4>
                          <input class="form-control" name="phoneNumber" value=" {{ $phoneNumber }}" readonly>
                        </div>

                        <div class="col text-left" style="margin-top:20px;">
                          <h4 > Referral Number:</h4>
                          <input class="form-control" name="referralNum" value=" {{ $referralNum }}" readonly>
                        </div>
                      

                            
                    </div><!-- Card Body -->
                  </div><!-- Card -->
                </div> 

                <div class="col">
                  <div class="card" >
                    <div class="card-header">
                        <a class="text-left col font-weight-bold" style="font-size: 20px;">Final Details</a>
                    </div>
                  </div>
                
                  <div id="finalmap"></div> <!-- THE FKING MAP -->
                  <div id="output"> </div>

                  <div class="card">
                    <div class="card-body">
                       
                            <div class="col text-left">
                                <i class="bi bi-geo-alt"></i>
                                <h5> Your Location:</h5>
                                <input type="text" class="form-control" id="from" placeholder="Origin" value="{{ $address }} " readonly>
                            </div>
                        
                            <div class="col text-left" style="margin-top:30px;">
                                <i class="bi bi-geo-alt-fill"></i>
                                <h5> Resort Location:</h5>
                                <input type="text" class="form-control"  id="to" name="Resort_name" placeholder="Destination" value="{{ $resort->Resort_Address }}" readonly>
                            </div>
                      

                            
                    </div><!-- Card Body -->
                  </div><!-- Card -->


                  <div class="card" style="margin-top:20px;">
                    <div class="card-header">
                        <a class="text-left col font-weight-bold" style="font-size: 20px;">Final Details</a>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-body">
                       
                            <div class="col text-left">
                                
                                <h5> How would you like to pay?</h5>

                                
                                <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Type of Payment</label>
                                  </div>
                                  <select name="payment_type"class="custom-select" id="inputGroupSelect01">
                                    <option selected>Choose...</option>
                                    <option value="Debit Card">Debit Card</option>
                                    <option value="PayPal">PayPal</option>
                                    <option value="GCash">GCash</option>
                                  </select>
                                </div>

                                <button type="submit" class="w-100 btn btn-lg btn-outline-success col"> Complete Book</button>
                            </div>
                    </div><!-- Card Body -->
                  </div><!-- Card -->
                </div>
              </div> <!-- Card Deck -->




            </div> <!-- CONTAINER -->
          </form>

          <script type="text/javascript">
                          
                          //set map options
                          var myLatLng = { lat: {{$resort->ResortLatitude_Coor}}, lng: {{$resort->ResortLongitude_Coor}} };
                          var mapOptions = {
                              center: myLatLng,
                              zoom: 10,
                              mapTypeId: google.maps.MapTypeId.ROADMAP

                          };

                          //create map
                          var map = new google.maps.Map(document.getElementById('finalmap'), mapOptions);

                          //create a DirectionsService object to use the route method and get a result for our request
                          var directionsService = new google.maps.DirectionsService();

                          //create a DirectionsRenderer object which we will use to display the route
                          var directionsDisplay = new google.maps.DirectionsRenderer();

                          //bind the DirectionsRenderer to the map
                          directionsDisplay.setMap(map);


                          //define calcRoute function
                          
                              //create request
                              var request = {
                                  origin: document.getElementById("from").value,
                                  destination: document.getElementById("to").value,
                                  travelMode: google.maps.TravelMode.DRIVING, //WALKING, BICYCLING, TRANSIT
                                  unitSystem: google.maps.UnitSystem.IMPERIAL
                              }

                              //pass the request to the route method
                              
                                  if (status == google.maps.DirectionsStatus.OK) {

                                      //Get distance and time
                                      const output = document.querySelector('#output');
                                      output.innerHTML = "<div class='alert-info'>From: " 
                                      + document.getElementById("from").value + ".<br />To: " 
                                      + document.getElementById("to").value + ".<br /> Driving distance <i class='fas fa-road'></i> : " 

                                      + result.routes[0].legs[0].distance.text + ".<br />Duration <i class='fas fa-hourglass-start'></i> : " 
                                      + result.routes[0].legs[0].duration.text + ".</div>";

                                      //display route
                                      directionsDisplay.setDirections(result);
                                  } else {
                                      //delete route from map
                                      directionsDisplay.setDirections({ routes: [] });
                                      //center map in Guest
                                      map.setCenter(myLatLng);

                                      //show error message
                                      output.innerHTML = "<div class='alert-danger'><i class='fas fa-exclamation-triangle'></i> Could not retrieve driving distance.</div>";
                                  }

                                  //create autocomplete objects for all inputs


                        
                                    </script>
            @endsection

