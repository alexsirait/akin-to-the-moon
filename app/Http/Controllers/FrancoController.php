<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrancoController extends Controller
{
    public function listhpmahal()
    {
        // satuan
        $data = DB::table('tbl_equipment')->where('id', 125)->first();

        // banyakan
        $dataBanyak = DB::table('tbl_equipment')->get();

        return view('hpmahal', [
            "data_satu" => $data->nama,
            "data_banyak" => $dataBanyak,
        ]);
    }

    public function barang()
    {
        // show barang
        $data = DB::table('tbl_equipment')->get();
        return view('barang', [
            "barang" => $data,
        ]);
    }

    public function add_barang()
    {
        return view('tambah_barang');
    }

    public function simpan_data(Request $r)
    {
        $masuk_identiti = $r->id;
        $masuk_barang = $r->nama_barang;
        $harga = $r->quantity;

        DB::table('tbl_equipment')->insert([
            "id" => $masuk_identiti,
            "nama" => "Data Masuk " . $masuk_barang,
            "quantity" => $harga,
        ]);

        return redirect('/barang');
    }
}
