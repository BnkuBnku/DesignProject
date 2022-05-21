@extends('adminlayout')



@section('content')
<main class="login-form">
  <div class="col-lg-12">
      <div class="form-group row">
          <div class="row">
              
                    <div class="row">
                        <h2> Resorts </h2>
                        <a type="button" class="btn btn-primary" style="margin-left: 1600px" href="{{ route('create') }}">Add Resort</a>
                    </div>

                    <table class="table" style="margin-top: 50px;">
                        <thead>
                            <tr>
                            <th scope="col">RESORT ID</th>
                            <th scope="col">RESORT NAME</th>
                            <th scope="col">RESORT ADDRESS</th>
                            <th scope="col">RESORT URL PICTURE</th>
                            <th scope="col">RESORT LATITUDE COORDINATE</th>
                            <th scope="col">RESORT LONGITUDE COORDINATE</th>
                            <th scope="col">SERVICES</th>
                            <th scope="col">COTTAGES</th>
                            <th scope="col">ESSENTIALS</th>
                            <th scope="col">OVERNIGHT STAY</th>
                            <th scope="col">PER ADULT</th>
                            <th scope="col">PER CHILD</th>

                            </tr>
                        </thead>
                        <tbody>
                            @forelse($resorts as $resort)
                            <tr>
                                <th scope="row">{{ $resort->id }}</th>
                                <td >{{ $resort->Resort_name }}</td>
                                <td >{{ $resort->Resort_Address }}</td>
                                <td class="d-inline-block text-truncate" style="max-width: 150px;">{{ $resort->resort_pic_url }}</td>
                                <td>{{ $resort->ResortLatitude_Coor }}</td>
                                <td>{{ $resort->ResortLongitude_Coor }}</td>
                                <td>{{ $resort->Services }}</td>
                                <td>{{ $resort->Cottages }}</td>
                                <td>{{ $resort->Essentials }}</td>
                                <td>{{ $resort->PerStay }}</td>
                                <td>{{ $resort->PerAdult }}</td>
                                <td>{{ $resort->PerChild }}</td>

                                <td>
                                <a  href="{{ route('resort.edit', $resort->id) }}" class="btn btn-success">Edit</a>
                                </td>
                                <td >
                                    <form action="{{ route('resort.destroy', $resort->id) }}" method="POST"
                                        class="form-hidden">
                                        <button class="btn btn-danger ">Delete</button>
                                        @csrf
                                    </form>
                                </td>
                            </tr>

                            
                            @empty
                            <tr>
                                <td colspan="8"> No Resorts Found</td>
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