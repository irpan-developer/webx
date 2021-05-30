@extends('layouts.admin')

   

@section('content')
<div class="container">
    <div class="card mx-2">
        <div class="card-header">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('tagline.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
 
    <form action="{{ route('tagline.update',$taglines->id) }}" method="POST">
        @csrf
        @method('POST')
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Headline :</strong>
                    <input type="text" name="headline" value="{{ $taglines->headline }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">
                    <strong>Bodyline :</strong>
                    <textarea class="form-control" style="height:150px" name="bodyline" placeholder="Bodyline">{{ $taglines->bodyline }}</textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Alamat 1 :</strong>
                    <input type="text" name="addressSatu" value="{{ $taglines->addressSatu }}" class="form-control" placeholder="address1">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Alamat 2 :</strong>
                    <input type="text" name="addressDua" value="{{ $taglines->addressDua }}" class="form-control" placeholder="address2">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>No Hp:</strong>
                    <input type="text" name="phoneNumber" value="{{ $taglines->phoneNumber }}" class="form-control" placeholder="No HP">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>E-mail:</strong>
                    <input type="text" name="email" value="{{ $taglines->email }}" class="form-control" placeholder="email">
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>

</div>
</div>
</div>
@endsection