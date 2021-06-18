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
                <a class="btn btn-primary" href="{{ route('kartu.index') }}"> Back</a>
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

    <form action="{{ route('kartu.update',$kartus->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Judul :</strong>
                    <input type="text" name="judul" value="{{ $kartus->judul }}" class="form-control{{ $errors->has('judul') ? ' is-invalid' : '' }}" placeholder="Name">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Deskripsi:</strong>
                    <textarea class="form-control{{ $errors->has('deskripsi') ? ' is-invalid' : '' }}" style="height:150px" name="deskripsi" placeholder="Detail">{{ $kartus->deskripsi }}</textarea>
                </div>
            </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <input type="file" name="file" class="form-control{{ $errors->has('file') ? ' is-invalid' : '' }}" value="{{ $kartus->path }}">

        </div>
          <img src="{{ $kartus->path }}" alt="{{ $kartus->path }}" />

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

        </div>

    </form>

    </div>
    </div>
    </div>

@endsection
