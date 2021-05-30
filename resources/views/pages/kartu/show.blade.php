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
                <a class="btn btn-primary" href="{{ route('kartu.index',$kartus->id) }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>judul:</strong>
                {{ $kartus->judul }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Deskripsi:</strong>
                {{ $kartus->deskripsi }}
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    
@endsection