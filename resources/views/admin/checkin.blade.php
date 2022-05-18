@extends('adminlayout')



@section('content')
<main class="login-form">
  <div class="container">
      <div class="form-group row">
          <div class="row">
              
                    <div clas="col">
                        <h2> Check IN </h2>
                    </div>

                    <table class="table" style="margin-top: 50px;">
                        <thead>
                            <tr>
                            <th scope="col">REFERRAL CODE</th>
                            <th scope="col">USERNAME</th>
                            <th scope="col">ADULT COUNT</th>
                            <th scope="col">CHILD COUNT</th>
                            <th scope="col">CHECK IN</th>
                            <th scope="col">CHECK OUT</th>
                            <th scope="col">STATUS</th>
                            <th scope="col">BOOKED CREATED</th>

                            </tr>
                        </thead>
                        <tbody>
                            @forelse($books as $book)
                            <tr>
                                <th scope="row">{{ $book->Referral_Num }}</th>
                                <td>{{ $book->Cus_Username }}</td>
                                <td>{{ $book->HAdult_Count }}</td>
                                <td>{{ $book->HChild_Count }}</td>
                                <td>{{ $book->Check_In }}</td>
                                <td>{{ $book->Check_Out }}</td>
                                <td>{{ $book->Status }}</td>
                                <td>{{ $book->created_at }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="8"> No Bookings Found</td>
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