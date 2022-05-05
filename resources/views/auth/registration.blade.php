@extends('layout')
  
@section('content')
<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-6">
              <div class="card">
                  <div class="card-header row ">
                      <a class="text-left col font-weight-bold " style="font-size:22px">Register</a>
                      <a class="nav-link text-right col font-weight-bold" href="{{ route('login') }}"> Back</a>
                  </div>
                  <div class="card-body">
  
                      <form action="{{ route('register.post') }}" method="POST">
                            @if(Session::get('Success'))
                                <div class="alert alert-success">
                                    {{ Session::get('Success') }}
                                </div>
                            @endif

                            @if(Session::get('Fail'))
                                <div class="alert alert-danger">
                                    {{ Session::get('Fail') }}
                                </div>
                            @endif

                          @csrf
                            <div class="container">
                                <div class="row">
                                    <div class="form-group col">
                                            <label for="firstname" class="row-md-4 row-form-label text-md-left">First Name</label>
                                            <div class="row-md-6">
                                                <input type="text" id="firstname" class="form-control" name="Rec_Firstname" required autofocus>
                                                @if ($errors->has('firstname'))
                                                    <span class="text-danger">{{ $errors->first('firstname') }}</span>
                                                @endif
                                            </div>
                                    </div>

                                    <div class=" form-group col">
                                            <label for="lastname" class="row-md-4 row-form-label text-md-left">Last Name</label>
                                            <div class="row-md-6">
                                                <input type="text" id="lastname" class="form-control" name="Rec_Lastname" required autofocus>
                                                @if ($errors->has('lastname'))
                                                    <span class="text-danger">{{ $errors->first('lastname') }}</span>
                                                @endif
                                            </div>
                                    </div>

                                </div>
                            </div>


                            <div class="container">
                                <div class="form-group col">
                                    <label for="username" class="row-md-4 row-form-label text-md-left">Username</label>
                                    <div class="row-md-6">
                                        <input type="text" id="username" class="form-control" name="Rec_Username" required autofocus>
                                        @if ($errors->has('username'))
                                            <span class="text-danger">{{ $errors->first('username') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                          
                            <div class="container">
                                <div class="form-group col">
                                    <label for="email_address" class="row-md-4 row-form-label text-md-left">E-Mail Address</label>
                                    <div class="row-md-6">
                                        <input type="email" id="email_address" class="form-control" name="Rec_Email" required autofocus>
                                        @if ($errors->has('email_address'))
                                            <span class="text-danger">{{ $errors->first('email_address') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
  
                            <div class="container">
                                <div class="form-group col">
                                    <label for="password" class="row-md-4 row-form-label text-md-left">Password</label>
                                    <div class="row-md-6">
                                        <input type="password" id="password" class="form-control" name="Rec_Pass" required>
                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="container">
                                <div class="form-group col">
                                    <label class="row-md-4 row-form-label text-md-left"> Birthday </label>
                                    <div class="row">
                                        <select name="year" class="">
                                            <option value="">Select Year</option>
                                            <?php
                                            for ($year = 1899; $year <= 2021; $year++) {
                                            $selected = (isset($getYear) && $getYear == $year) ? 'selected' : '';
                                            echo "<option value=$year $selected>$year</option>";
                                            }
                                            ?>
                                        </select>

                                        <?php
                                            $MonthArray = array(
                                                "1" => "January", "2" => "February", "3" => "March", "4" => "April",
                                                "5" => "May", "6" => "June", "7" => "July", "8" => "August",
                                                "9" => "September", "10" => "October", "11" => "November", "12" => "December",
                                                );
                                            ?>
                                        <select name="month" class="">
                                            <option value="">Select Month</option>
                                                <?php
                                                foreach ($MonthArray as $monthNum=>$month) {
                                                $selected = (isset($getMonth) && $getMonth == $monthNum) ? 'selected' : '';
                                                echo '<option ' . $selected . ' value="' . $monthNum . '">' . $month . '</option>';
                                                }
                                                ?>
                                        </select>

                                        <select name="day" class="">
                                            <option value="">Select Day</option>
                                            <?php
                                            for ($day = 1; $day <= 31; $day++) {
                                            $selected = (isset($getDay) && $getDay == $day) ? 'selected' : '';
                                            echo "<option value=$day $selected>$day</option>";
                                            }
                                            ?>
                                        </select>

                                    </div>

                                </div>
                            </div>

                            <div class="container">
                                <div class="form-group col">
                                    <label for="gender" class="row-md-4 row-form-label text-md-left">Gender</label>
                                    <div class="btn-group col" data-toggle="buttons">
                                        <label class="btn btn-primary active col">
                                            <input type="radio" name="Rec_Gender" id="option1" value="Male" checked> Male
                                        </label>
                                        <label class="btn btn-primary col">
                                            <input type="radio" name="Rec_Gender" id="option2" value="Female"> Female
                                        </label>
                                    </div>

                                </div>
                            </div>

                            <div class="container">
                                <div class="form-group col">
                                    <label for="phonenumber" class="row-md-4 row-form-label text-md-left">Phone Number</label>
                                    <div class="row-md-6">
                                        <input type="number" id="phonenumber" class="form-control" name="Rec_PhoneNum" required>
                                        @if ($errors->has('phonenumber'))
                                            <span class="text-danger">{{ $errors->first('phonenumber') }}</span>
                                        @endif
                                    </div>

                                </div>
                            </div>
  
                            <div class="">
                                <button type="submit" class="w-100 btn btn-lg btn-outline-primary">
                                    Register
                                </button>
                            </div>
                      </form>
                        
                  </div>
              </div>
          </div>
      </div>
  </div>
</main>
@endsection