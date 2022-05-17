<!DOCTYPE html>
<html>
<head>
    <title>Watapampam Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <style type="text/css">
        @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);
  
        body{
            margin: 0;
            font-size: .9rem;
            font-weight: 400;
            line-height: 1.6;
            color: #212529;
            text-align: left;
            background-color: #f5f8fa;
        }
        .navbar-laravel
        {
            box-shadow: 0 2px 4px rgba(0,0,0,.04);
        }
        .navbar-brand , .nav-link, .my-form, .login-form
        {
            font-family: Raleway, sans-serif;
        }
        .my-form
        {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }
        .my-form .row
        {
            margin-left: 0;
            margin-right: 0;
        }
        .login-form
        {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }
        .login-form .row
        {
            margin-left: 0;
            margin-right: 0;
        }
    </style>
</head>
<body>
     <!-- NAVIGATION BAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Administration</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            
            <li class="nav-item active">
                <a class="nav-link" href=" {{ route('dashboard') }}">Dashboard<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                Bookings
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href=" {{ route('pending') }}">Pending Bookings</a>
                <a class="dropdown-item" href=" {{ route('confirm') }}">Confirmed Bookings</a>
                <a class="dropdown-item" href=" {{ route('refund') }}">Refunded Bookings</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href=" {{ route('checkin') }}">Check-In</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href=" {{ route('checkout') }} ">Check-Out</a>
            </li>
            
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                Settings
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href=" {{ route('accounts') }}" >Accounts</a>
                <a class="dropdown-item" href=" {{ route('resort') }}" >Address Configuration</a>
            </li>
          
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <a name="username"> Hello , {{ $LoggedUserInfo['Rec_Username'] }} </a>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href=" {{ route('logout') }} ">Log out</a>
                    </li>
                </ul>
        </form>
    </div>
    </nav>
    <!-- END NAVIGATION BAR -->

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                            <form action="{{ route('logina.post') }}" method="POST">
                                                @if(Session::get('Fail'))
                                                    <div class="alert alert-danger">
                                                        {{ Session::get('Fail') }}
                                                    </div>
                                                @endif

                                                @csrf
                                                <div class="form-group row">
                                                    <label for="username" class="col-md-4 col-form-label text-md-right">Username</label>
                                                    <div class="col-md-6">
                                                        <input type="text" id="username" class="form-control" name="Admin_Username" required autofocus>
                                                        @if ($errors->has('username'))
                                                            <span class="text-danger">{{ $errors->first('username') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                        
                                                <div class="form-group row">
                                                    <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                                    <div class="col-md-6">
                                                        <input type="password" id="password" class="form-control" name="Admin_Pass" required>
                                                        @if ($errors->has('password'))
                                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" >Login</button>
                                </div>

                            </form>
                    </div>
                </div>
            </div>
        </div>
  
@yield('content')
     
</body>
</html>