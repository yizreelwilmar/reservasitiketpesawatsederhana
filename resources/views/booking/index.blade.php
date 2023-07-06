<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flight
    </title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer>
    </script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
      .admin{
    background: linear-gradient(rgba(255, 255, 255, 0.6), rgba(0, 0, 0, 0.2)), url("/foto/plane4.jfif") center/cover no-repeat;
    min-height: 60vh;
    color: rgb(0, 0, 0)5);
    padding: 15px;
    display: flex;
    flex-direction: column;
    align-content: stretch;
}
    </style>
  </head>
  <body class="bg-dark">
    @extends('layouts.app')
    @section('content')
    <div class="container">
      <div class="row admin">
        <div class="col-md-12">
          <h2 class="text-dark">Booking Page
          </h2>
          <p>
            <a class="btn btn-primary" href="{{ route('flight.index') }}">Book A Flight
            </a>
            <a class="btn btn-primary" href="{{ route('booking.create') }}">New Booking
            </a>
          </p>
          @if(session()->get('success'))
          <div class="alert alert-success">
            {{ session()->get('success') }}
          </div>
          @endif
          <table class="table table-striped table-bordered text-light">
            <thead>
              <tr>
                <th scope="col">No.
                </th>
                <th scope="col">ID
                </th>
                <th scope="col">Nama
                </th>
                <th scope="col">Code
                </th>
                <th scope="col">Flights</th>
                <th scope="col">From
                </th>
                <th scope="col">To
                </th>
                <th scope="col">Date
                </th>
                <th scope="col">Time
                </th>
                <th scope="col">Email
                </th>
                <th scope="col">Edit
                </th>
                <th scope="col">Delete
                </th>
              </tr>
            </thead>
            <tbody>
              @foreach($booking as $n)
              <tr>
                <td>{{ $loop->iteration }}
                </td>
                <td>{{ $n->id }}
                </td>
                <td>{{ $n->Nama }}
                </td>
                <td>{{ $n->code }}
                </td>
                <td>{{ $n->pesawat->pesawat_name }}</td>
                <td>{{ $n->from}}
                </td>
                <td>{{ $n->to }}
                </td>
                <td>{{ $n->date }}
                </td>
                <td>{{ $n->time }}
                </td>
                <td>{{ $n->email }}
                </td>
                <td>
                  <a class="btn btn-warning" href="{{ route('booking.edit', $n->id) }}">Edit
                  </a> 
                </td>
                <td>
                  <form onsubmit="return confirm('Apakah anda yakin?');" action="{{ route('booking.destroy', $n->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete
                    </button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    @endsection
  </body>
</html>
