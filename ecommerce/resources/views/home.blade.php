@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="container big-banner">
            <div class="jumbotron jumbotron-fluid" style="background-color: cyan;">
                <div class="container text-center">
                    <h1 class="display-4">Welcome to SICOID Store!</h1>
                    <p class="lead">Toko dengan harga termurah</p>
                </div>
            </div>
        </div>
        @foreach ($barangs as $barang)
        <div class="col-md-4 mb-5 col-sm-6">
            <div class="card align-middle text-center">
                <div class="card-body">
                    <h5 class="card-title">{{ $barang->nama_barang }}</h5>
                    <img class="p-2" width="150" src="{{ url('/uploads/'.$barang->file) }}">
                    <p class="card-text">
                        <strong>Harga : </strong>Rp. {{number_format($barang->harga)}}<br>
                        <strong>Stok : </strong>{{$barang->stok}}<br>
                        <hr>
                        <strong>Keterangan : </strong><br>
                        {{$barang->keterangan}} 
                    </p>
                    <a href="{{ url('pesan')}}/{{ $barang->id}}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Pesan</a>
                </div>
              </div>
        </div>    
        @endforeach
    </div>
</div>
@endsection
