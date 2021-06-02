<!DOCTYPE html>

<html>

<head>

    <title>laravel 8 image upload example - ItSolutionStuff.com.com</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>

    

<body>

<div class="container">

     

    <div class="panel panel-primary">

      <div class="panel-heading"><h2>laravel 8 image upload example - ItSolutionStuff.com.com</h2></div>

      <div class="panel-body">

     

        @if ($message = Session::get('success'))

        <div class="alert alert-success alert-block">

            <button type="button" class="close" data-dismiss="alert">×</button>

                <strong>{{ $message }}</strong>

        </div>

        <img src="images/{{ Session::get('file') }}">

        @endif

    

        @if (count($errors) > 0)

            <div class="alert alert-danger">

                <strong>Whoops!</strong> There were some problems with your input.

                <ul>

                    @foreach ($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif

    
        <form method="post" action="{{ route('image.upload.post') }}" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
          <input type="file" name="file" class="form-control{{ $errors->has('file') ? ' is-invalid' : '' }}" >
          @if ($errors->has('file'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('file') }}</strong>
              </span>
          @endif
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-success">Save</button>
      </div>
    </form>
















    

      </div>

    </div>

</div>

</body>

  

</html>