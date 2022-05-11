@extends('adminlayout')



@section('content')
<main class="login-form">
  <div class="container">
      <div class="form-group row">
            <div class="row">
                <div clas="col">
                    <h2> Accounts </h2>
                </div>

                <table class="table" style="margin-top: 50px;">
                    <thead>
                        <tr>
                        <th scope="col">EMAIL</th>
                        <th scope="col">USERNAME</th>
                        <th scope="col">LASTNAME</th>
                        <th scope="col">FIRSTNAME</th>
                        <th scope="col">PASSWORD</th>
                        <th scope="col">BIRTHDAY</th>
                        <th scope="col">GENDER</th>
                        <th scope="col">PHONE NUMBER</th>

                        </tr>
                    </thead>
                    <tbody>
                        @forelse($accounts as $account)
                        <tr>
                            <th scope="row">{{ $account->Rec_Email }}</th>
                            <td>{{ $account->Rec_Username }}</td>
                            <td>{{ $account->Rec_Lastname }}</td>
                            <td>{{ $account->Rec_Firstname }}</td>
                            <td>{{ $account->Rec_Pass }}</td>
                            <td>{{ $account->Rec_Birthday }}</td>
                            <td>{{ $account->Rec_Gender }}</td>
                            <td>{{ $account->Rec_PhoneNum }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8"> No Books Found</td>
                        </tr>
                        @endforelse

                    </tbody>
                </table>

                


                
                
            </div>
      </div>
  </div>
</main>
@endsection