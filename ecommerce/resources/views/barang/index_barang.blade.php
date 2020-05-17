@extends('layouts.app')
@section('content')
<?php
function rupiah($angka)
{
    $hasil_rupiah = number_format($angka,0,'','.');
    return $hasil_rupiah;
}
?>

<title>List Barang</title>
<div class="container">
    <div class="card">
        <div class="card-header text-center" style="background-color:#343A40; color: #FFFFFF;">
            <strong>BARANG</strong>
        </div>
        <div class="card-header">
            <a href="/barang/tambah" class="btn btn-primary btn-sm float-left"><span class="fas fa-plus" style="padding-right: 7px;"></span>Input</a>
        </div>
        <div class="card-body table-responsive p-0" style="height: 500px;">
            <table class="table table-bordered table-hover table-striped table-head-fixed">
                <thead>
                    <tr>
                        <th>Foto Barang</th>
                        <th>Nama Barang</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($barang as $p)
                    <tr>
                        <td><img width="150px" src="{{ url('/uploads/'.$p->file) }}"></td>
                        <td class='align-middle'>{{ $p->nama_barang }} </td>
                        <td class='align-middle'>{{ rupiah($p->harga) }}</td>
                        <td class='align-middle'>{{ $p->stok }} </td>
                        <td class='align-middle'>{{ $p->keterangan }} </td>
                        <td class='align-middle text-center'>
                            <a href="/barang/edit/{{ $p->id }}" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/barang/hapus/{{ $p->id }}" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection