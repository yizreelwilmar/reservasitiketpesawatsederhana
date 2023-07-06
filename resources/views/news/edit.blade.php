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
          <h2>Edit News
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
          <form action="{{ route('news.update', $news->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="title">Title
              </label>
              <input type="text" class="formcontrol" name="title" id="title" value="{{ $news->title }}">
            </div>
            <div class="form-group">
              <label>Status
              </label>
              <div class="form-check">
                <div class="radio">
                  <input class="form-checkinput" type="radio" name="status" value="1" {{ $news->status== '1' ? 'checked' : '' }}>
                  <label class="form-check-label">
                    Enabled
                  </label>
                </div>
                <div class="radio">
                  <input class="form-checkinput" type="radio" name="status" value="0" {{ $news->status=='0' ? 'checked' : '' }}>
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
                <option value="Sports" {{ $news->category == 'Sports' ? 'selected' : '' }}>Sports
                </option>
                <option value="Politics" {{ $news->category == 'Politics' ? 'selected' : '' }}>Politics
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
                <option value="{{ $country->id }}" {{ $news->country_id == $country->id ? '
                  selected' : '' }}>
                  {{ $country->country_name }}
                </option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="content">Content
              </label>
              <textarea class="formcontrol" name="content" id="content" rows="3">{{ $news->content }}
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
