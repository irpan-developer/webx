@extends('layouts.admin')

@section('content')
<div class="container">
<div class="card mx-2">
    <div class="card-header">
        <h2><strong>Tabel Kategori</strong></h2>
    </div>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('kategori.create') }}"> Buat Kartu Baru</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>No</th>
            <th>Kategori</th>
            <th>Jumlah Kartu</th>
            <th width="320px">Action</th>
        </tr>
        </thead>
        @foreach ($kategoris as $kategori)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{ $kategori->kategori }}</td>
            <td>{{ $kategori->kartu->count()    }}</td>
            <td>
                <form action="{{ route('kategori.destroy',$kategori->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('kategori.show',$kategori->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('kategori.edit',$kategori->id) }}">Edit</a>
                @csrf
                @method('POST')
                <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
</table>
</div>
<div class="card-footer d-flex justify-content-end">

        </div>
</div>

@endsection

