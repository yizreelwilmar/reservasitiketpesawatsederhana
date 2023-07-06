<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News
    </title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body>
    @extends('layouts.app')
    @section('content')
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>News
          </h2>
          <p>
            <a class="btn btn-primary" href="{{ route('news.create') }}">Tambah berita
            </a>
          </p>
          @if(session()->get('success'))
          <div class="alert alert-success">
            {{ session()->get('success') }}
          </div>
          @endif
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">No.
                </th>
                <th scope="col">ID
                </th>
                <th scope="col">Title
                </th>
                <th scope="col">Category
                </th>
                <th scope="col">Country
                </th>
                <th scope="col">Population
                </th>
                <th scope="col">Status
                </th>
                <th scope="col">Content
                </th>
                <th scope="col">Edit
                </th>
                <th scope="col">Delete
                </th>
              </tr>
            </thead>
            <tbody>
              @foreach($news as $n)
              <tr>
                <td>{{ $loop->iteration }}
                </td>
                <td>{{ $n->id }}
                </td>
                <td>{{ $n->title }}
                </td>
                <td>{{ $n->category }}
                </td>
                <td>{{ $n->country->country_name}}
                </td>
                <td>{{ $n->country->population}}
                </td>
                <td>{{ $n->status ? 'enabled' : 'disabled' }}
                </td>
                <td>{{ $n->content }}
                </td>
                <td>
                  <a class="btn btn-warning" href="{{ route('news.edit', $n->id) }}">Edit
                  </a> 
                </td>
                <td>
                  <form onsubmit="return confirm('Apakah anda yakin?');" action="{{ route('news.destroy', $n->id) }}" method="POST">
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
