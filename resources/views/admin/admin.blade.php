@extends('adminlayout')



@section('content')
<main class="login-form">
  <div class="container">
      <div class="form-group row">
          <div class="row">
              
          
        
            <div class="booking">
                    <div class="row">
                        <div class="col-sm-6" >
                            <div class="card" style="">
                                <div class="card-body">
                                    <h5 class="card-text text-right" style="font-size: 20px;">0</h5>
                                    <p class="card-title text-right" style="font-size: 25px; color: orange;" ><strong>PENDING BOOKINGS</strong></p>
                                    <a href="{{ route('pending') }}" class="btn btn-primary" >View Details</a>
                                </div>
                            </div>
                        </div>

                    <div class="col-sm-6">
                        <div class="card" style="">
                            <div div class="card-body">
                                <h5 class="card-text text-right" style="font-size: 20px;">0</h5>
                                <p class="card-title text-right" style="font-size: 25px; color: purple;" ><strong>CONFIRM BOOKINGS</strong></p>
                                <a href="{{ route('confirm') }}" class="btn btn-primary">View Details</a>
                            </div>
                        </div>
                    </div> 
            </div>
                
        </nav>

                <table class="table" style="margin-top: 50px;">
                    <thead>
                        <tr>
                        <th scope="col">REFFEREAL CODE</th>
                        <th scope="col">CHECK-IN DATE</th>
                        <th scope="col">CHECK-OUT DATE</th>
                        <th scope="col">TOTAL PRICE</th>
                        <th scope="col">FIRST NAME</th>
                        <th scope="col">LAST NAME</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">PHONE NUMBER</th>
                        <th scope="col">REMARKS</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">X2BR45L</th>
                        <td>05-07-22</td>
                        <td>05-11-22</td>
                        <td>P 15,000.00</td>
                        <td>Cyrex</td>
                        <td>Cuizon</td>
                        <td>neomarscc@gmail.com</td>
                        <td>0906-895-1254</td>
                        <td>-</td>
                        </tr>
                    </tbody>
                    </table>
                  
          
                        
                  
              </div>
          </div>
      </div>
  </div>
</main>
@endsection