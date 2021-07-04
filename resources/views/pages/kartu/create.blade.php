@extends('layouts.admin')



@section('content')

<div class="container">
    <div class="card mx-2">
        <div class="card-header">

<form action="{{ route('kartu.store') }}" method="POST" enctype="multipart/form-data">
 @csrf
 <div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label for="kategori_id">Kategori:</label>
            <select name="kategori_id" class="form-control{{ $errors->has('kategori') ? ' is-invalid' : '' }}">
                @foreach ($kategoris as $kategori )
                <option value="{{$kategori->id}}">{{$kategori->id}}</option>
                @endforeach
              </select>
        </div>
    </div>


    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Judul:</strong>
            <input type="text" name="judul" class="form-control{{ $errors->has('judul') ? ' is-invalid' : '' }}" placeholder="Name">
            @if ($errors->has('judul'))
            <div class="alert alert-danger">
                <div >{{$errors->first('judul')}}</div>
            </div>
            @endif


        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Deskripsi :</strong>
            <textarea class="form-control{{ $errors->has('deskripsi') ? ' is-invalid' : '' }}" style="height:150px" name="deskripsi" placeholder="Deskripsi"></textarea>
            @if ($errors->has('deskripsi'))
            <div class="alert alert-danger">
                <div >{{$errors->first('deskripsi')}}</div>
            </div>
            @endif
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <input type="file" name="file" class="form-control{{ $errors->has('file') ? ' is-invalid' : '' }}" >
          @if ($errors->has('file'))
          <div class="alert alert-danger">
            <div >{{$errors->first('file')}}</div>
        </div>
          @endif
        </div>
        </div>

    <div class="card-footer d-flex justify-content-end">
        <a class="btn btn-primary" href="{{ route('kartu.index') }}"> Kembali</a>
    </div>


    <div class="card-footer d-flex justify-content-start">
            <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>

 </div>



</form>
</body>

</div>
</div>
</div>
@endsection
