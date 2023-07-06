<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking
    </title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer>
    </script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
form input,select {
  margin-bottom: 1rem;
  background: #fff;
  border: 1px solid #9c9c9c;
}
form button {
  background: lightgrey;
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

input,select {
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
          <h2 class="text-primary">Booking
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
          <form action="{{ route('booking.store') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="title">Nama :
              </label>
              <input type="text" class="formcontrol" name="nama" id="nama" placeholder="Nama">
            </div>
            <div class="form-group">
              <label for="title">Code :</label>
              <select class="form-control" name="code" id="code">
              <option value="">Choose Code</option>
              @foreach($pesawats as $pesawat)
              <option value="{{ $pesawat->pesawat_code }}">
              {{ $pesawat->pesawat_code }}
            </option>
                @endforeach
            </select>
            </div>
            <div class="form-group">
            <label>Flights :</label>
              <select class="form-control" name="pesawat_id">
              <option value="">Choose Flight</option>
              @foreach($pesawats as $pesawat)
              <option value="{{ $pesawat->id }}">
              {{ $pesawat->pesawat_name }}
            </option>
                @endforeach
            </select>
            </div>
            <div class="form-group">
              <label for="title">From :
              </label>
              <input type="text" class="formcontrol" name="from" id="code" placeholder="From">
            </div>
            <div class="form-group">
              <label for="title">To :
              </label>
              <input type="text" class="formcontrol" name="to" id="to" placeholder="To">
            </div>
            <div class="form-group">
              <label for="title">Date :
              </label>
              <input type="date" class="formcontrol" name="date" id="date" placeholder="Date">
            <div class="form-group">
              <label for="title">Time :
              </label>
              <input type="time" class="formcontrol" name="time" id="time" placeholder="Time">
            </div>
            <div class="form-group">
              <label for="title">Email :
              </label>
              <input type="text" class="formcontrol" name="email" id="email" placeholder="Email">
            </div>

            <button type="submit" class="btn btn-primary">Book
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
