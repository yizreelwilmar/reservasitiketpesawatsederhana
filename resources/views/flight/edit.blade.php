<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FLight
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
          <h2 class="text-primary">Edit Flight
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
          <form action="{{ route('flight.update', $flight->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="title">Flight :
              </label>
              <input type="text" class="formcontrol" name="flight" id="flight" value="{{ $flight->flight }}">
            </div>
            <div class="form-group">
              <label for="title">Code :
              </label>
              <input type="text" class="formcontrol" name="code" id="code" value="{{ $flight->code }}">
            </div>
            <div class="form-group">
              <label for="title">From :
              </label>
              <input type="text" class="formcontrol" name="from" id="code" value="{{ $flight->from }}">
            </div>
            <div class="form-group">
              <label for="title">To :
              </label>
              <input type="text" class="formcontrol" name="to" id="to" value="{{ $flight->to }}">
            </div>
            <div class="form-group">
              <label for="title">Date :
              </label>
              <input type="text" class="formcontrol" name="date" id="date" value="{{ $flight->date }}">
            </div>
            <div class="form-group">
              <label for="title">Time :
              </label>
              <input type="text" class="formcontrol" name="time" id="time" value="{{ $flight->time }}">
            </div>
            <div class="form-group">
              <label for="title">Price :
              </label>
              <input type="text" class="formcontrol" name="price" id="price" value="{{ $flight->price }}">
            </div>
            <div class="form-group">
              <label for="title">Baggage :
              </label>
              <input type="text" class="formcontrol" name="baggage" id="baggage" value="{{ $flight->baggage }}">
            </div>
            <div class="form-group">
            <label>Status</label>
              <div class="form-check">
              <div class="radio">
              
              <label class="form-check-label">
              Enabled  <input class="form-check-input" type="radio" name="status" value="1" {{ $flight->status== '1' ? 'checked' : '' }}>
              </label>
            </div>
            <div class="radio">
              
              <label class="form-check-label">
              Disabled  <input class="form-check-input" type="radio" name="status" value="0" {{ $flight->status=='0' ? 'checked' : '' }}>
                </label>
                  </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Edit
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
