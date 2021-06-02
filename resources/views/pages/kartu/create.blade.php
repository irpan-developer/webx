@extends('layouts.admin')

   

@section('content')   

<div class="container">
    <div class="card mx-2">
        <div class="card-header">

<form action="{{ route('kartu.store') }}" method="POST" enctype="multipart/form-data">
 @csrf
 <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Judul:</strong>
            <input type="text" name="judul" class="form-control" placeholder="Name">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Deskripsi :</strong>
            <textarea class="form-control" style="height:150px" name="deskripsi" placeholder="Detail"></textarea>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">   
          <input type="file" name="file" class="form-control{{ $errors->has('file') ? ' is-invalid' : '' }}" >
          @if ($errors->has('file'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('file') }}</strong>
              </span>
          @endif
        </div>
        </div>        

    <div class="card-footer d-flex justify-content-end">
        <a class="btn btn-primary" href="{{ route('kartu.index') }}"> Kembali</a>
    </div>

    
    <div class="card-footer d-flex justify-content-start">
            <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>

 </div>



</form>
</body>

</div>
</div>
</div>
@endsection