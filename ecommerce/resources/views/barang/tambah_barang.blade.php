@extends('layouts.app')
@section('content')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
       <title>Daerah</title>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center" style="background-color:#343A40; color: #FFFFFF;">
                    <strong>TAMBAH DATA</strong>
                </div>
                <div class="card-header">
                    <a href="/barang" class="btn btn-secondary">Kembali</a>
                </div>
                <div class="card-body">
                    <form method="post" autocomplete="off" action="/barang/store" enctype="multipart/form-data">


                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>Nama Barang</label>
                            <input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang">

                            @if($errors->has('nama_barang'))
                                <div class="text-danger">
                                    {{ $errors->first('nama_barang')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Harga</label>
                            <input type="text" name="harga" class="form-control" placeholder="Harga">

                            @if($errors->has('harga'))
                                <div class="text-danger">
                                    {{ $errors->first('harga')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Stok</label>
                            <input type="text" name="stok" class="form-control" placeholder="Stok">

                            @if($errors->has('stok'))
                                <div class="text-danger">
                                    {{ $errors->first('stok')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Keterangan</label>
                            <input type="text" name="keterangan" class="form-control" placeholder="Keterangan">

                            @if($errors->has('keterangan'))
                                <div class="text-danger">
                                    {{ $errors->first('keterangan')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <b>File Gambar</b><br/>
                            <input type="file" name="file">
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                    </form>

                </div>
            </div>
        </div>
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
@endsection