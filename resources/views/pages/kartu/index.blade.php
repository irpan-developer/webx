@extends('layouts.admin')

@section('content')
<div class="container">
<div class="card mx-2">
    <div class="card-header">
        <h2><strong>Tabel Kartu</strong></h2>
    </div>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('kartu.create') }}"> Buat Kartu Baru</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Deskripsi</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($kartus as $kartu)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{ $kartu->judul }}</td>
            <td>{{ $kartu->deskripsi }}</td>
            <td>
                <form action="{{ route('kartu.destroy',$kartu->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('kartu.show',$kartu->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('kartu.edit',$kartu->id) }}">Edit</a>
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
        {{ $kartus->links() }}
        </div>
</div>

@endsection

