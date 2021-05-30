@extends('layouts.admin')
 
@section('content')
<div class="container">
    <div class="card mx-2">
        <div class="card-header">
            <h2><strong>Kategori tabel</strong></h2>
        </div>
        <div class="card-body">
            <h6>Tabel Item</h6>
            <table class="table table-bordered">
                <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jumlah</th>
                <th>Dibuat Pada</th>
                <th>Diperbarui pada</th>
                </tr>
            @foreach ($items as $item)
                <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->jumlah }}</td>
                <td>{{ $item->created_at }}</td>
                <td>{{ $item->updated_at }}</td>   
                </tr>
            @endforeach
            </table>
        </div>  
        <div class="card-footer d-flex justify-content-end">
        {{ $items->appends(['kartu'=>$kartus->currentPage()])->appends(['tagline'=>$taglines->currentPage()])->links() }}
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="card mx-2">
        
        <div class="card-body">
        <h6>Tabel Kartu</h6>
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Dibuat Pada</th>
                    <th>Diperbarui pada</th>
                </tr>
                @foreach($kartus as $kartu)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$kartu->judul}}</td>
                        <td>{{$kartu->deskripsi}}</td>
                        <td>{{$kartu->created_at }}</td>
                        <td>{{$kartu->updated_at }}</td>  
                    </tr>
                @endforeach
            </table>
            <div class="card-footer d-flex justify-content-end">
                {{ $kartus->appends(['item'=>$items->currentPage()])->appends(['tagline'=>$taglines->currentPage()])->links() }}
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="card mx-2">
        <div class="card-body">
        <h6>Tabel Kartu</h6>
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Headline</th>
                    <th>Bodyline</th>
                    <th>Dibuat Pada</th>
                    <th>Diperbarui pada</th>
                </tr>
                @foreach($taglines as $tagline)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$tagline->headline}}</td>
                        <td>{{$tagline->bodyline}}</td>
                        <td>{{$tagline->created_at }}</td>
                        <td>{{$tagline->updated_at }}</td>  
                    </tr>
                @endforeach
            </table>
            <div class="card-footer d-flex justify-content-end">
                {{ $taglines->appends(['item'=>$items->currentPage()])->appends(['kartu'=>$kartus->currentPage()])->links() }}
            </div>
        </div>
    </div>
</div>



@endsection
