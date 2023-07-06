<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flights
    </title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer>
    </script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel = "icon" href = "{{ asset('/foto/logo1.png') }}">
    <style>
   form {
  padding: 1em;
  background: #f9f9f9;
  border: 1px solid #c1c1c1;
  margin-top: 2rem;
  max-width: 600px;
  margin-left: auto;
  margin-right: auto;
  padding: 1em;
}
form input {
  margin-bottom: 1rem;
  background: #fff;
  border: 1px solid #9c9c9c;
}
form button {
  background: dark;
  padding: 0.7em;
  border: 0;
}
form button:hover {
  background: gold;
}

label {
  text-align: left;
  display: block;
  padding: 0.5em 1.5em 0.5em 0;
}

input {
  width: 100%;
  padding: 0.7em;
  margin-bottom: 0.5rem;
}
input:focus {
  outline: 3px solid gold;
}


@media (min-width: 400px) {
  form {
    overflow: hidden;
  }

  label {
    float: left;
    width: 200px;
  }

  input {
    float: left;
    width: calc(100% - 200px);
  }

  button {
    float: right;
    width: calc(100% - 200px);
  }
    </style>
  </head>
  <body>
    @extends('layouts.app')
    @section('content')
    <div class="container">     
      <div class="row">
        <div class="col-md-6">
          <h2 class="text-primary">Create Flights
          </h2>
          @if ($errors->any())
          <div class="alert alert-danger">
            Something wrong
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}
              </li>
              @endforeach
            </ul>
          </div>
          @endif
          <form action="{{ route('flight.store') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="flight">Flight</label>
              <input type="text" class="formcontrol" name="flight" id="flight" placeholder="Flight">
            </div>
            <div class="form-group">
              <label for="code">Code</label>
              <input type="text" class="formcontrol" name="code" id="code" placeholder="Code">
            </div>
            <div class="form-group">
              <label for="from">From</label>
              <input type="text" class="formcontrol" name="from" id="code" placeholder="From">
            </div>
            <div class="form-group">
              <label for="to">To</label>
              <input type="text" class="formcontrol" name="to" id="to" placeholder="To">
            </div>
            <div class="form-group">
              <label for="date">Date</label>
              <input type="date" class="formcontrol" name="date" id="date"placeholder="Date">
            </div>
            <div class="form-group">
              <label for="time">Time</label>
              <input type="time" class="formcontrol" name="time" id="time"placeholder="Time">
            </div>
            <div class="form-group">
              <label for="price">Price</label>
              <input type="text" class="formcontrol" name="price" id="price" placeholder="Price">
            </div>
            <div class="form-group">
              <label for="baggage">Baggage</label>
              <input type="text" class="formcontrol" name="baggage" id="baggage" placeholder="Baggage">
            </div>
            <div class="form-group">
 <label>Status</label>
 <div class="form-check">
 <div class="radio">
 
 <label class="form-check-label">
 Enabled  <input class="form-check-input" type="radio" name="status" value="1">
 </label>
 </div>
 <div class="radio">
 <label class="form-check-label">
 Disabled <input class="form-check-input" type="radio" name="status" value="0">
 </label>
 </div>
 </div>
</div>


            
            <button type="submit" class="btn btn-primary">Create
            </button>
            <button type="reset" class="btn btn-warning">Reset
            </button>
          </form>
        </div>
      </div>
    </div>
    @endsection
  </body>
</html>
