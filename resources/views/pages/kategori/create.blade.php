@extends('layouts.admin')



@section('content')

<div class="container">
    <div class="card mx-2">
        <div class="card-header">

<form action="{{ route('kategori.store') }}" method="POST" enctype="multipart/form-data">
 @csrf
 <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Kategori:</strong>
            <input type="text" name="kategori" class="form-control{{ $errors->has('kategori') ? ' is-invalid' : '' }}" placeholder="Name">
            @if ($errors->has('kategori'))
            <div class="alert alert-danger">
                <div >{{$errors->first('kategori')}}</div>
            </div>
            @endif


        </div>
    </div>


    <div class="card-footer d-flex justify-content-end">
        <a class="btn btn-primary" href="{{ route('kategori.index') }}"> Kembali</a>
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
