@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="card mx-2">
        <div class="card-header">


    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('kategori.index',$kategoris->id) }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>judul:</strong>
                {{ $kategoris->kategori }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Deskripsi:</strong>
                {{ $kategoris->deskripsi }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <img src="{{ $kategoris->path }}" height="140" widht="100" alt="{{ $kategoris->path }}" />
            </div>
        </div>

    </div>
    </div>
    </div>
    </div>

@endsection
