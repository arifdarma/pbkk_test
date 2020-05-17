@extends('layouts.master')
@section('content')
<?php
function rupiah($angka)
{
    $hasil_rupiah = number_format($angka,0,'','.');
    return $hasil_rupiah;
}
?>

<title>Daerah Pengiriman</title>
<div class="container">
    <div class="card">
        <div class="card-header text-center" style="background-color:#343A40; color: #FFFFFF;">
            <strong>DAERAH PENGIRIMAN</strong>
        </div>
        <div class="card-header">
                <a href="/daerah" class="btn btn-secondary float-left">Kembali</a>
        </div>
        <div class="card-body table-responsive p-0" style="height: 500px;">
            <table class="table table-bordered table-hover table-striped table-head-fixed">
                <thead>
                    <tr>
                        <th>Nama Pemilik</th>
                        <th>Nama Pabrik</th>
                        <th>Harga Bon Supir</th>
                        <th>Harga Kirim</th>
                        <th>OPSI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($daerah as $p)
                    <tr>
                        <?php
                        $tmp = \App\Pemilik_truk::find($p->id_pemilik);
                        $tmp2 = \App\Pabrik::find($p->id_pabrik);
                        ?>
                        <td style="color:{{$tmp->warna_pemilik}}">{{ $tmp->nama_pemilik }} </td>
                        <td style="color:{{$tmp2->warna_pabrik}}">{{ $tmp2->nama_pabrik }} </td>
                        <td>{{ rupiah($p->harga_bonSupir) }}</td>
                        <td>{{ rupiah($p->harga_kirim) }}</td>
                        <td>
                            <a href="/daerah/edit/{{ $p->id_daerah }}" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/daerah/hapus/{{ $p->id_daerah }}" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection