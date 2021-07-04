@extends('layouts.admin')



@section('content')

<div class="container">
    <div class="card mx-2">
        <div class="card-header">


    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Kategori</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('kategori.index') }}"> Back</a>
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

    <form action="{{ route('kategori.update',$kategoris->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Judul :</strong>
                    <input type="text" name="judul" value="{{ $kategoris->kategori }}" class="form-control{{ $errors->has('judul') ? ' is-invalid' : '' }}" placeholder="Name">
                </div>
            </div>
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
