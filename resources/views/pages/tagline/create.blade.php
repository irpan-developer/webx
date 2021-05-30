@extends('layouts.admin')

   

@section('content')   
<div class="container">
    <div class="card mx-2">
        <div class="card-header">
        <form action="{{ route('tagline.store') }}" method="POST">
@csrf
 <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Headline:</strong>
            <input type="text" name="headline" class="form-control" placeholder="Name">
        </div>
    </div>


    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Bodyline :</strong>
            <textarea class="form-control" style="height:150px" name="bodyline" placeholder="Detail"></textarea>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Alamat 1 :</strong>
            <input type="text" name="addressSatu" class="form-control" placeholder="Alamat 1">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Alamat 2 :</strong>
            <input type="text" name="addressDua" class="form-control" placeholder="Alamat 2">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>No Hp:</strong>
            <input type="text" name="phoneNumber" class="form-control" placeholder="No Hp">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>E-mail :</strong>
            <input type="text" name="email" class="form-control" placeholder="E-mail">
        </div>
    </div>

    
    
    
    <div class="card-footer d-flex justify-content-end">
        <a class="btn btn-primary" href="{{ route('tagline.index') }}"> Kembali</a>
    </div>

    
    <div class="card-footer d-flex justify-content-start">
            <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>



</form>
</body>
</html>

        </div>
    </div>
</div>
@endsection