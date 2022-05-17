@extends('layout')

            @section('content')
              
          <div class="card">
            <a class="btn btn-danger" href="{{ route('homepage') }}" role="button"> Cancel and Back to Homepage</a>
          </div>
           
          
            <div class="col" style="margin-top: 100px;" >
              <div class="card-deck">
                <div class="col-sm-3">
                  <div class="card">
                    <div class="card-header">
                        <h1 class="text-left col font-weight-bold">Details</h1>
                    </div>
                  </div>
                  <div class="card"> 
                    <div class="card-body">
                        <div class="col text-left" style="margin-top: 30px;">
                          <h4> Check-in:</h4>
                          <div class="col" >
                              <input class="form-control" id="checkIn" class="text-center" type="date" name="checkIn" placeholder="check-in-date"
                              value="{{ $checkin }}"
                              min="mm/dd/yy" max="mm/dd/yy">
                          </div>
                        </div>

                        <div class="col text-left" style="margin-top: 30px;">
                          <h4> Check-out:</h4>
                          <div class="col" >
                            <input class="form-control" id="checkOut" class="text-center" type="date" name="checkOut" placeholder="check-out-date"
                                value="{{ $checkout }}"
                                min="mm/dd/yy" max="mm/dd/yy">
                          </div>
                        </div>
                        
                        <div class="col text-left" style="margin-top: 30px;">
                          <h4> Group:</h4>

                          <div class="col text-left " style="margin-left:1px;">
                            <p >Adult:&nbsp;&nbsp; </p>
                            <input class="form-control" id="numberAdult" class="text-center" type="number" name="numberAdult" value="{{ $numberAdult }}">
                          </div>  

                          <div class="col text-left" style="margin-left:1px;">
                            <p>Child:&nbsp;&nbsp;  </p>
                            <input class="form-control" id="numberChild" class="text-center" type="number" name="numberChild" value="{{ $numberChild }}" >
                          </div>
                        </div>
                    </div>  <!-- Card Body -->
                  </div>  <!-- Card -->
                </div> 

                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-header">
                        <h1 class="text-left col font-weight-bold" >Select Resort</h1>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-body">

                        <div>
                          <div >

                                   
                                  @forelse($resorts as $resort)
                                  <div id="array" class="col" >
                                    <div class="card bg-light mb-3" style="" >
                                      <div class="card-body">
                                          <div class="row">
                                            <image class="row"src="{{ $resort->resort_pic_url }}" style="  height: 250px; width: 250px;"></image>
                                            <div class="col">
                                              
                                              <p class="card-title text-center col" style="font-size: 25px; color: #0AA1DD;  margin-left: 20px;" ><strong>{{ $resort->Resort_name }}</strong></p>
                                              <a  href="{{ route('gmaps', $resort->id) }}"  type="button" class="btn btn-primary text-center col" style="font-size: 10px; margin-left: 20px; margin-bottom: 20px;" >Show on map</a>
            
                                              <h5 class="text-right col"> Address</h5>
                                              <p class="card-title text-right col" style=" color: gray; margin-bottom:50px;"> {{ $resort->Resort_Address }}</p>
                                              
                                              <h5 class="text-right col"> Average</h5>
                                              <p class="card-title text-right col" style="color: #2F8F9D; margin-bottom:50px;"> ₱{{ $resort->Cottages  }}</p>
                                            </div>
                                          </div>
                                          <a href="{{ url('front/Book/' .$resort->id. '/' .$checkin. '/' .$checkout. '/' .$numberAdult. '/' .$numberChild) }}" class="w-100 btn btn-lg btn-outline-success col" style="margin-top: 10px;">Select Resort ></a>
                                      </div>
                                    </div><!-- CARD -->
                                  </div>
                                  
                                
                                  @empty
                                  <tr>
                                      <td colspan="8"> No Resort Found</td>
                                  </tr>
                                  @endforelse

                          </div>
                        </div>
                        
                        
                      
                    </div><!-- Card Body -->
                  </div><!-- Card -->
                </div>
                

                 
              </div> <!-- Card Deck -->
              @if(Session::get('Fail'))
                      <div class="alert alert-danger">
                          {{ Session::get('Fail') }}
                      </div>
              @endif



            </div> <!-- CONTAINER -->
        
          
              
               
            @endsection

