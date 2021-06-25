@extends('layouts.admin')

@section('content')
<div class="container">
<div class="card mx-2">
        <div class="card-header">
            <h2><strong>Tabel Item</strong></h2>
        </div>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('item.create') }}"> Create New item</a>
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
            <table class="table table-bordered" id="dataTable">
       <thead>
                <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jumlah</th>
            <th width="280px">Action</th>
        </tr>
    </thead>
        @foreach ($items as $item)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->jumlah }}</td>
            <td>

            <form action="{{ route('item.destroy',$item->id) }}" method="POST">
            <a class="btn btn-info" href="{{ route('item.show',$item->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('item.edit',$item->id) }}">Edit</a>
            @csrf
            @method('POST')
            <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
</div>
    </div>
<div class="card-footer d-flex justify-content-end">
        {{ $items->links() }}
        </div>
</div>
@endsection
