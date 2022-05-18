@extends('adminlayout')



@section('content')
<main class="login-form">
                <div class="container-lg">
                    <div class="">
                        <div class="row">
                            <div class="col" >
                                <div class="card" style="" >
                                    <div class="card-body">
                                        <h5 class="card-text text-right" style="font-size: 20px;"> {{ $pendingCount }}</h5>
                                        <p class="card-title text-right" style="font-size: 25px; color: orange;" ><strong>PENDING BOOKINGS</strong></p>
                                        <a href="{{ route('pending') }}" class="btn btn-primary" >View Details</a>
                                    </div>
                                </div><!-- CARD -->
                            </div>

                            <div class="col">
                                <div class="card" style="">
                                    <div div class="card-body">
                                        <h5 class="card-text text-right" style="font-size: 20px;"> {{ $confirmCount }} </h5>
                                        <p class="card-title text-right" style="font-size: 25px; color: purple;" ><strong>CONFIRM BOOKINGS</strong></p>
                                        <a href="{{ route('confirm') }}" class="btn btn-primary">View Details</a>
                                    </div>
                                </div>
                            </div>  <!-- CARD -->

                            <div class="col" >
                                <div class="card" style="">
                                    <div class="card-body">
                                        <h5 class="card-text text-right" style="font-size: 20px;"> {{ $refundCount }} </h5>
                                        <p class="card-title text-right" style="font-size: 25px; color: green;" ><strong>REFUNDED BOOKINGS</strong></p>
                                        <a href="{{ route('refund') }}" class="btn btn-primary" >View Details</a>
                                    </div>
                                </div><!-- CARD -->
                            </div>
                            
                        </div> <!-- ROW -->
                    </div>
                </div>

  <div class="container">
      <div class="form-group">
          <div class="">
                <table class="table" style="margin-top: 50px;">
                    <thead>
                        <tr>
                        <th scope="col">REFERRAL CODE</th>
                        <th scope="col">CHECK-IN DATE</th>
                        <th scope="col">CHECK-OUT DATE</th>
                        <th scope="col">TOTAL PAYMENT</th>
                        <th scope="col">FIRST NAME</th>
                        <th scope="col">LAST NAME</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">PHONE NUMBER</th>
                        <th scope="col">STATUS</th>

                        </tr>
                    </thead>
                    <tbody>
                        @forelse($guestDisplays as $guest)
                        <tr>
                        <th scope="row"> {{ $guest->Referral_Num }}</th>
                        <td>{{ $guest->Check_In }}</td>
                        <td>{{ $guest->Check_Out }}</td>
                        <td>{{ $guest->Total_Payment }}</td>
                        <td>{{ $guest->Cus_Fname }}</td>
                        <td>{{ $guest->Cus_Lname }}</td>
                        <td>{{ $guest->Cus_Email }}</td>
                        <td>{{ $guest->Cus_Number }}</td>
                        <td>{{ $guest->Status }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8"> No Guest Bookings Found</td>
                        </tr>
                        @endforelse
                    </tbody>
                    </table>


          
                        
                  
              </div>
          </div>
      </div>
  </div>
</main>
@endsection