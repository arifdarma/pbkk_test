<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

class BarangController extends Controller
{
    public function index(){
        $barang = Barang::all();
        return view('barang.index_barang',['barang' => $barang]);
    }

    public function tambah(){
        return view('barang.tambah_barang');
    }

    public function store(Request $req){
        $this->validate($req,[
            'nama_barang'=>'required',
            'harga'=>'required',
            'stok'=>'required',
            'keterangan'=>'required',
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $file = $req->file('file');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'uploads';
        $file->move($tujuan_upload,$nama_file);

        Barang::create([
            'nama_barang' => $req->nama_barang,
            'harga' => $req->harga,
            'stok' => $req->stok,
            'keterangan' => $req->keterangan,
            'file' => $nama_file,
        ]);

        return redirect('/barang');
    }

    // public function searchpabrik(Request $req){
    // }

    // public function searchpemilikpabrik(Request $req){
    // }

    public function edit($id){
        $barang = Barang::find($id);
        return view('barang.edit_barang',['barang' => $barang]);
    }

    public function update($id, Request $req){
        $this->validate($req,[
            'harga'=>'required',
        ]);

        $barang = Barang::find($id);
        $barang->harga = $req->harga;
        $barang->save();
        return redirect('/barang');
    }

    public function hapus($id){
        $barang = Barang::find($id);
        $barang->delete();
        return redirect('/barang');
    }
}
