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
                <a class="btn btn-primary" href="{{ route('tagline.index',$taglines->id) }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Headline :</strong>
                {{ $taglines->headline }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Bodyline :</strong>
                {{ $taglines->bodyline}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat 1 :</strong>
                {{ $taglines->addressSatu}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat 2 :</strong>
                {{ $taglines->addressDua}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No Hp :</strong>
                {{ $taglines->phoneNumber}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>email :</strong>
                {{ $taglines->email}}
            </div>
        </div>

    </div>
    </div>
    </div>
    </div>
@endsection