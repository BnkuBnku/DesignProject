@extends('layout')

            @section('content')
              
          <div class="card">
            <a class="btn btn-danger" href="{{ route('homepage') }}" role="button"> Back to Selection</a>
          </div>

          <form action="{{ route('transact') }}" method="POST">
          @csrf
            
            <div class="col" style="margin-top: 100px;" >
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
                          <h4> Check-in:</h4>
                          <input class="form-control" name="checkIn" value="{{ $checkIn }}" readonly> 
                        </div>

                        <div class="col text-left">
                          <h4> Check-out:</h4>
                          <input class="form-control" name="checkOut" value="{{ $checkOut }} " readonly> 
                        </div>
                        
                        <div class="col text-left">
                          <h4> Group:</h4>

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

                  <div class="card">
                    <div class="card-header">
                        <a class="text-left col font-weight-bold" style="font-size: 20px;">Selected Resort</a>
                    </div>
                  </div>

                  <div class="card"> 
                    <div class="card-body">
                        <div class="col text-left">
                          <h4> Resort Name:</h4>
                          <input class="form-control" name="Resort_name" value="{{ $resorts->Resort_name }}" readonly> 
                        </div>

                        <div class="col text-left">
                          <h4> Resort Address:</h4>
                          <input class="form-control" name="Resort_Address" value="{{ $resorts->Resort_Address }}" readonly>
                        </div>
                        
                        
                    </div>  <!-- Card Body -->
                  </div>  <!-- Card -->
                </div> 

                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-header">
                        <a class="text-left col font-weight-bold" style="font-size: 20px;">Fill up Guest information</a>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-body">

                        <div class="form-group">
                          <label for="inputEmail">Guest Email</label>
                          <input type="email" class="form-control" id="inputEmail" name="email" required autofocus>
                          @if ($errors->has('inputEmail'))
                              <span class="text-danger">{{ $errors->first('inputEmail') }}</span>
                          @endif
                        </div>
                      
                        <div class="form-group">
                          <label for="inputUsername">Guest Nickname</label>
                          <input type="text" class="form-control" id="inputUsername" aria-describedby="userHelp" name="username" required>
                          <small id="userHelp" class="form-text text-muted">We'll use this as your call out as soon you arrived.</small>
                          @if ($errors->has('inputUsername'))
                              <span class="text-danger">{{ $errors->first('inputUsername') }}</span>
                          @endif
                        </div>

                        <div class="form-group">
                          <label for="inputFirst">First Name</label>
                          <input type="text" class="form-control" id="inputFirst" name="firstname" required>
                          @if ($errors->has('inputFirst'))
                              <span class="text-danger">{{ $errors->first('inputFirst') }}</span>
                          @endif
                        </div>

                        <div class="form-group">
                          <label for="inputLast">Last Name</label>
                          <input type="text" class="form-control" id="inputLast" name="lastname" required>
                          @if ($errors->has('inputLast'))
                              <span class="text-danger">{{ $errors->first('inputLast') }}</span>
                          @endif
                        </div>

                        <div class="form-group">
                          <label for="inputAddress">Guest's Address</label>
                          <input type="text" class="form-control" id="inputAddress" aria-describedby="AddHelp" name="address" required>
                          <small id="AddHelp" class="form-text text-muted">Please, Try putting accurate address for distance estimation.</small>
                          @if ($errors->has('inputAddress'))
                              <span class="text-danger">{{ $errors->first('inputAddress') }}</span>
                          @endif

                        </div>

                        <div class="form-group">
                          <label for="inputContact">Contact Number</label>
                          <input type="text" class="form-control" id="inputContact" name="phoneNumber" required>
                          @if ($errors->has('inputContact'))
                              <span class="text-danger">{{ $errors->first('inputContact') }}</span>
                          @endif

                        </div>
                        
                        <div class="form-group">
                          <label for="inputRefNumber">Referral Number</label>
                          <input readonly type="text" class="form-control" id="inputRefNumber"  aria-describedby="userRef" value="{{$MyrandomString}}" name="referralNum">
                          <small id="userRef" class="form-text text-muted">This is generated referral code.</small>

                        </div>
                        
                        <button type="submit" class="btn btn-primary ">Submit</button>
                      
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
          </form>
              
               
            @endsection

