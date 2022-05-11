@extends('layout')

            @section('content')


          <form action="{{ route('final.post') }}" method="POST">
          @csrf
            
            <div class="col" style="margin-top: 50px;" >
              <div class="card-deck">
                <div class="col-lg-12">
                  <div class="card" style="background-color:#AAAAAA">
                    <div class="card-header row">
                        <a class="text-left col font-weight-bold" style="font-size: 40px;">Overview Details</a>
                        <a class="btn btn-danger" style="font-size:30px;"href="{{ route('book') }}" role="button">Edit</a>
                    </div>
                  </div>
                  <div class="card"> 
                    <div class="card-body">
                        <h1 style="color:#42C2FF;"> Travel Information:</h1>

                        <div class="col text-left" style="margin-top:50px;">
                         <div class="input-group input-group-lg">
                                <div class="input-group-prepend">
                                    <span class="input-group-text font-weight-bold" id="inputGroup-sizing-lg">Check-In</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="checkin" value="{{ $checkin }}" readonly>
                            </div>
                        </div>

                        <div class="col text-left" style="margin-top:50px;">
                            <div class="input-group input-group-lg">
                                <div class="input-group-prepend">
                                    <span class="input-group-text font-weight-bold" id="inputGroup-sizing-lg">Check-Out</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="checkout" value="{{ $checkout }}" readonly>
                            </div>
                        </div>

                        <div class="col text-left" style="margin-top:100px;">
                            <div class="input-group input-group-lg">
                                <div class="input-group-prepend">
                                    <span class="input-group-text font-weight-bold" id="inputGroup-sizing-lg">Length of Stay</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="checkin" value="{{ $checkin }}" readonly>
                            </div>
                        </div>
                        
                        <div class="col text-left" style="margin-top:60px">
                            <h2> Group:</h2>
                            <div class="input-group input-group-lg">
                                <div class="input-group-prepend">
                                    <span class="input-group-text font-weight-bold" id="inputGroup-sizing-lg">Adult</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="numberAdult" value="{{ $numberAdult }}" readonly>
                            </div>
                          <div class="input-group input-group-lg">
                                <div class="input-group-prepend">
                                    <span class="input-group-text font-weight-bold" id="inputGroup-sizing-lg">Child</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="numberChild" value="{{ $numberChild }}" readonly>
                            </div>
                        </div>

                        <h1 style="color:#42C2FF; margin-top:200px;"> Guest Information:</h1>

                        <div class="col text-left" style="margin-top:50px">
                            <div class="input-group input-group-lg">
                                <div class="input-group-prepend">
                                    <span class="input-group-text font-weight-bold">Guest's Fullname</span>
                                </div>
                                <input type="text" aria-label="First name" class="form-control" name="firstname" value="{{ $firstname }}" readonly>
                                <input type="text" aria-label="Last name" class="form-control" name="lastname" value="{{ $lastname }}" readonly>
                            </div>
                        </div>
                        
                        <div class="col text-left" style="margin-top:60px">
                            <div class="input-group input-group-lg">
                                <div class="input-group-prepend">
                                    <span class="input-group-text font-weight-bold" id="inputGroup-sizing-lg">Guest Nickname</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="username" value="{{ $username }}" readonly>
                            </div>
                        </div>

                        <div class="col text-left" style="margin-top:60px">
                            <div class="input-group input-group-lg">
                                <div class="input-group-prepend">
                                    <span class="input-group-text font-weight-bold" id="inputGroup-sizing-lg">Address</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="address" value="{{ $address }}" readonly>
                            </div> 
                        </div>

                        <div class="col text-left" style="margin-top:60px">
                            <div class="input-group input-group-lg">
                                <div class="input-group-prepend">
                                    <span class="input-group-text font-weight-bold" id="inputGroup-sizing-lg">Phone Number</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="phoneNum" value="{{ $phoneNum }}" readonly>
                            </div> 
                        </div>

                        <div class="col text-left" style="margin-top:60px">
                            <div class="input-group input-group-lg">
                                <div class="input-group-prepend">
                                    <span class="input-group-text font-weight-bold" id="inputGroup-sizing-lg">Email Address</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="email" value="{{ $email }}" readonly>
                            </div> 
                        </div>

                        <div class="col text-left" style="margin-top:60px">
                            <div class="input-group input-group-lg">
                                <div class="input-group-prepend">
                                    <span class="input-group-text font-weight-bold" id="inputGroup-sizing-lg">Referral Number</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="referralNum" value="{{ $referralNum }}" readonly>
                            </div> 
                        </div>

                        <div class="col text-left" style="margin-top:60px">
                            <button type="submit" class="btn btn-primary"> Submit</button>
                        </div>
                        
                    </div>  <!-- Card Body -->
                  </div>  <!-- Card -->
                </div> 
              </div> <!-- Card Deck -->
              @if(Session::get('Fail'))
                      <div class="alert alert-danger">
                          {{ Session::get('Fail') }}
                      </div>
              @endif



            </div> <!-- CONTAINER -->
          </form>
              
               
            @endsection

