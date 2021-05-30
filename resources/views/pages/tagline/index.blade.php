@extends('layouts.admin')

@section('content')
<div class="container">
<div class="card mx-2">
    <div class="card-header">
        <h2><strong>Tabel Tagline</strong></h2>
    </div>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('tagline.create') }}"> Buat Kartu Baru</a>
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
            <th>Headline</th>
            <th>Bodylyne</th>
            <th>Alamat 1</th>
            <th>Alamat 2</th>
            <th>No telp</th>
            <th>email</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($taglines as $tagline)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{ $tagline->headline }}</td>
            <td>{{ $tagline->bodyline }}</td>
            <td>{{ $tagline->addressSatu }}</td>
            <td>{{ $tagline->addressDua }}</td>
            <td>{{ $tagline->phoneNumber }}</td>
            <td>{{ $tagline->email }}</td>
            <td>
                <form action="{{ route('tagline.destroy',$tagline->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('tagline.show',$tagline->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('tagline.edit',$tagline->id) }}">Edit</a>
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
        {{ $taglines->links() }}
        </div>
</div>

@endsection

