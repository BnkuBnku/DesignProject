@extends('frontlayout')

@section('content')
          <nav style="margin-top: 250px;">    
                <div class="container">
                    <div class="row">
                      <Form class="row" action="{{ route('get.post') }}" method="POST">
                        @csrf
                        <center class="row">
                          <div class="col" >
                              
                              <label for="checkIn">CHECK IN DATE:</label>
                              <input type = "date" name = "checkIn" placeholder = "check-in-date"
                              value="mm/dd/yy"
                              min="mm/dd/yy" max="mm/dd/yy">
                          </div>

                          <div class="col" >
                              
                              <label for="checkOut">CHECK IN OUT:</label>
                              <input type = "date" name = "checkOut" placeholder = "check-out-date"
                              value="mm/dd/yy"
                              min="mm/dd/yy" max="mm/dd/yy">
                          </div>
                                
                          
                          <div class="col">
                                  <a> ADULT </a>
                                  <input type="number" name="numberAdult" id="numberInput" max="20" min="1" step="1" value="2">
                          </div> <!-- ADULT -->
                    

                          <div class="col">
                                  <a> CHILD </a>
                                  <input type="number" name="numberChild" id="numberInput" max="20" min="0" step="1" value="0">
                          </div> <!-- CHILDREN -->
                          
                          <div class="col">
                              <button type="submit" >
                                BOOK NOW
                              </button>
                          </div>
                        </center>
                        @if(Session::get('Fail'))
                          <div class="alert alert-danger">
                              {{ Session::get('Fail') }}
                          </div>
                        @endif
                      </Form><!-- FORM -->
                  </div>
              </div>


          </nav>
@endsection
