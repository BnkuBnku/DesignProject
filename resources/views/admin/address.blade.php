@extends('adminlayout')



@section('content')
<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-xl-10">
                <div class="card">
                    <div class="card-header row ">
                        <a class="text-left col font-weight-bold " style="font-size:22px">Address Configuration</a>
                        <a class="text-right col  " href="{{ route('resort') }}" style="font-size:22px; color:red;">Back</a>
                    </div>
                </div> 
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('save', $resorts->id) }}" method="POST">
                            @if(Session::get('Fail'))
                                <div class="alert alert-danger">
                                    {{ Session::get('Fail') }}
                                </div>
                            @endif

                            @if(Session::get('Success'))
                                <div class="alert alert-success">
                                    {{ Session::get('Success') }}
                                </div>
                            @endif
                            
                            @csrf

                                <div class="form-group row">
                                    <label for="ResortName" class="row-md-4 row-form-label text-md-left" style="font-size: 20px">Resort Name</label>
                                    <div class="col-md-10 ">
                                        <input type="text" id="ResortName" class="form-control" name="Resort_name" style="margin-left:79px" value="{{ $resorts->Resort_name }}" required autofocus>
                                        @if ($errors->has('ResortName'))
                                            <span class="text-danger">{{ $errors->first('ResortName') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="ResortAdd" class="row-md-4 row-form-label text-md-left" style="font-size: 20px">Resort Address</label>
                                    <div class="col-md-10 ">
                                        <input type="text" id="ResortAdd" class="form-control" name="Resort_Address" style="margin-left:61px" value="{{ $resorts->Resort_Address }}" required autofocus>
                                        @if ($errors->has('ResortAdd'))
                                            <span class="text-danger">{{ $errors->first('ResortAdd') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="ResortUrlPic" class="row-md-4 row-form-label text-md-left" style="font-size: 20px">Resort Address</label>
                                    <div class="col-md-10 ">
                                        <input type="text" id="ResortUrlPic" class="form-control" name="ResortUrlPic" style="margin-left:62px" value="{{ $resorts->resort_pic_url }}" required autofocus>
                                        @if ($errors->has('ResortUrlPic'))
                                            <span class="text-danger">{{ $errors->first('ResortUrlPic') }}</span>
                                        @endif
                                    </div>
                                </div>
                            
                                <div class="form-group row">
                                    <label for="Latitude" class="row-md-4 row-form-label text-md-left" style="font-size: 20px;">Latitude Coordinate</label>
                                    <div class="col-md-10 ">
                                        <input type="text" id="Latitude" class="form-control" name="ResortLatitude_Coor"  style="margin-left:20px" value="{{ $resorts->ResortLatitude_Coor }}" required >
                                        @if ($errors->has('Latitude'))
                                            <span class="text-danger">{{ $errors->first('Latitude') }}</span>
                                        @endif
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <label for="Longitude" class="row-md-4 row-form-label text-md-left" style="font-size: 20px">Longitude Coordinate</label>
                                    <div class="col-md-10 ">
                                        <input type="text" id="Longitude" class="form-control" name="ResortLongitude_Coor"  value="{{ $resorts->ResortLongitude_Coor }}" required >
                                        @if ($errors->has('Longitude'))
                                            <span class="text-danger">{{ $errors->first('Longitude') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="Services" class="row-md-4 row-form-label text-md-left" style="font-size: 20px">Services</label>
                                    <div class="col-md-10 ">
                                        <input type="number" id="Services" class="form-control" name="Services" style="margin-left: 124px"    value="{{ $resorts->Services }}" required >
                                        @if ($errors->has('Services'))
                                            <span class="text-danger">{{ $errors->first('Services') }}</span>
                                        @endif
                                    </div>
                                </div> 

                                <div class="form-group row">
                                    <label for="Cottages" class="row-md-4 row-form-label text-md-left" style="font-size: 20px">Cottages</label>
                                    <div class="col-md-10 ">
                                        <input type="number" id="Cottages" class="form-control" name="Cottages" style="margin-left: 120px" value="{{ $resorts->Cottages }}"  required >
                                        @if ($errors->has('Cottages'))
                                            <span class="text-danger">{{ $errors->first('Cottages') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="Essentials" class="row-md-4 row-form-label text-md-left" style="font-size: 20px">Essentials</label>
                                    <div class="col-md-10 ">
                                        <input type="number" id="Essentials" class="form-control" name="Essentials" style="margin-left: 112px"  value="{{ $resorts->Essentials }}" required >
                                        @if ($errors->has('Essentials'))
                                            <span class="text-danger">{{ $errors->first('Essentials') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="PerStay" class="row-md-4 row-form-label text-md-left" style="font-size: 20px">Overnight Stay</label>
                                    <div class="col-md-10 ">
                                        <input type="number" id="PerStay" class="form-control" name="PerStay" style="margin-left: 70px" value="{{ $resorts->PerStay }}"  required >
                                        @if ($errors->has('PerStay'))
                                            <span class="text-danger">{{ $errors->first('PerStay') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="PerAdult" class="row-md-4 row-form-label text-md-left" style="font-size: 20px">PerAdult</label>
                                    <div class="col-md-10 ">
                                        <input type="number" id="PerAdult" class="form-control" name="PerAdult" style="margin-left: 126px" value="{{ $resorts->PerAdult }}"  required >
                                        @if ($errors->has('PerAdult'))
                                            <span class="text-danger">{{ $errors->first('PerAdult') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="PerChild" class="row-md-4 row-form-label text-md-right" style="font-size: 20px">PerChild</label>
                                    <div class="col-md-10 ">
                                        <input type="number" id="PerChild" class="form-control" name="PerChild" style="margin-left: 126px"   value="{{ $resorts->PerChild }}" required >
                                        @if ($errors->has('PerChild'))
                                            <span class="text-danger">{{ $errors->first('PerChild') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="container">
                                    <div class="form-group col" style="margin-left: 1170px">
                                        
                                            <button type="submit" class="btn btn-primary">
                                                Save
                                            </button>
                                    </div>
                                </div>
                        </form> 
                    </div>
                </div>
            </div>
          </div>
      </div>
  </div>
</main>
@endsection