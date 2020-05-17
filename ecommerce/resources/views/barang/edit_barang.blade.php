@extends('layouts.app')
@section('content')
        <title>Daerah</title>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center" style="background-color:#343A40; color: #FFFFFF;">
                   <strong>EDIT DATA</strong>
                </div>
                <div class="card-header">
                    <a href="/barang" class="btn btn-secondary">Kembali</a>
                </div>
                <div class="card-body">

                    <form method="post" autocomplete="off" action="/barang/update/{{ $barang->id }}">

                        {{ csrf_field() }}
                        <!-- {{ method_field('PUT') }} -->
                        
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="text" name="harga" class="form-control" placeholder="Harga" value="{{$barang->harga }}">

                            @if($errors->has('harga'))
                                <div class="text-danger">
                                    {{ $errors->first('harga')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                    </form>

                </div>
            </div>
        </div>
@endsection