<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News
    </title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer>
    </script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body>
    @extends('layouts.app')
    @section('content')
    <div class="container">     
      <div class="row">
        <div class="col-md-6">
          <h2>Create News
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
          <form action="{{ route('news.store') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="title">Title
              </label>
              <input type="text" class="formcontrol" name="title" id="title" placeholder="Enter title">
            </div>
            <div class="form-group">
              <label>Status
              </label>
              <div class="form-check">
                <div class="radio">
                  <input class="form-check-input" type="radio" name="status" value="1">
                  <label class="form-check-label">
                    Enabled
                  </label>
                </div>
                <div class="radio">
                  <input class="form-check-input" type="radio" name="status" value="0">
                  <label class="form-check-label">
                    Disabled
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label>Category
              </label>
              <select class="form-control" name="category">
                <option value="">Choose category
                </option>
                <option value="Sports">Sports
                </option>
                <option value="Politics">Politics
                </option>
              </select>
            </div>
            <div class="form-group">
              <label>Country
              </label>
              <select class="form-control" name="country_id">
                <option value="">Choose country
                </option>
                @foreach($countries as $country)
                <option value="{{ $country->id }}">
                  {{ $country->country_name }}
                </option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="content">Content
              </label>
              <textarea class="formcontrol" name="content" id="content" rows="3">
              </textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save
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
