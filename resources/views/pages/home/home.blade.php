@extends('layouts.landing')

@section('content')
<header class="bg-primary py-5 mb-5">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-lg-12">
                    
                        <h1 class="display-4 text-white mt-5 mb-2">{{$taglines[1]->headline}}</h1>
                        <p class="lead mb-5 text-white-50">{{$taglines[1]->bodyline}}</p>
                    
                    </div>
                </div>
            </div>
        </header>
<!-- Page Content-->
        <div class="container">
            <div class="row">
                @foreach($items as $item)
                <div class="col-md-8 mb-5">
                    <h2>{{$item->nama}}</h2>
                    <hr />
                    <p>Stock :{{$item->jumlah}}</p>
                    <a class="btn btn-primary btn-lg" href="#!">Pesan Sekarang »</a>
                </div>
                @if ($loop->first)
                <div class="col-md-4 mb-5">
                    <h2>Hubungi Kami</h2>
                    <hr />
                    <address>
                        <strong>{{$taglines[1]->headline}}</strong>
                        <br />
                        {{$taglines[1]->addressSatu}}
                        <br />
                        {{$taglines[1]->addressDua}}
                        <br />
                    </address>
                    <address>
                        <abbr title="Phone">No Hp:</abbr>
                        {{$taglines[1]->phoneNumber}}
                        <br />
                        <abbr title="Email">e-mail:</abbr>
                        <a href="mailto:#">{{$taglines[1]->email}}</a>
                    </address>
                </div>
            </div>
            @endif
            @endforeach
            {{ $items->appends(['kartu'=>$kartus->currentPage()])->links() }}
 
            <div class="row">
                
                @foreach($kartus as $kartu)
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <img class="card-img-top" src="https://via.placeholder.com/300x200" alt="..." />
                        <div class="card-body">
                            <h4 class="card-title">{{$kartu->judul}}</h4>
                            <p class="card-text">{{$kartu->deskripsi}}</p>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary" href="#!">Selengkapnya...</a></div>
                    </div>
                </div>
                @endforeach
                {{ $kartus->appends(['item'=>$items->currentPage()])->links() }}

            </div>
        </div>
@endsection