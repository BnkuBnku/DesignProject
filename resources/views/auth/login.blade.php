@extends('layout')
  
@section('content')
<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-4">
                <div class="card">
                    <div class="card-header row ">
                        <a class="text-left col font-weight-bold " style="font-size:22px">Login</a>
                        <a class="nav-link text-right col font-weight-bold" href="{{ route('register') }}"> Register</a>
                    </div>
                </div>
                <div class="card">
                  
                    <div class="card-body">
  
                        <form action="{{ route('login.post') }}" method="POST">
                            @if(Session::get('Fail'))
                                <div class="alert alert-danger">
                                    {{ Session::get('Fail') }}
                                </div>
                            @endif

                            @csrf
                            <div class="form-group row">
                                <label for="username" class="col-md-4 col-form-label text-md-right">Username</label>
                                <div class="col-md-6">
                                    <input type="text" id="username" class="form-control" name="Rec_Username" required autofocus>
                                    @if ($errors->has('username'))
                                        <span class="text-danger">{{ $errors->first('username') }}</span>
                                    @endif
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-6">
                                    <input type="password" id="password" class="form-control" name="Rec_Pass" required>
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                            </div>
    
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
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