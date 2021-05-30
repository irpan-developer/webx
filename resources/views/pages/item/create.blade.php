@extends('layouts.admin')

   

@section('content')   

<div class="container">
<div class="card mx-2">
    <div class="card-header">
<form action="{{ route('item.store') }}" method="POST">
@csrf
 <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            <input type="text" name="nama" class="form-control" placeholder="Name">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>jumlah:</strong>
            <textarea class="form-control" style="height:150px" name="jumlah" placeholder="Detail"></textarea>
        </div>
    </div>
    <div class="card-footer d-flex justify-content-end">
        <a class="btn btn-primary" href="{{ route('item.index') }}"> Kembali</a>
    </div>

    
    <div class="card-footer d-flex justify-content-start">
            <button type="submit" class="btn btn-primary">Submit</button>
    </div>

 </div>



</form>
</div>
</div>
</div>
@endsection