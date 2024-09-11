<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrangController extends Controller
{
    public function listorang()
    {
        // satuan
        $dataorang = DB::table('tbl_orang')->get();


        return view('Orang', [
            "orang" => $dataorang,
            "dataorang" => $dataorang
        ]);
    }

    public function addorang(Request $r)
    {
        return view('tambah_orang');
    }

    public function simpan_orang(Request $r)
    {
        $masuk_orang = $r->id;
        $masuk_nama = $r->name;
        $lokasi = $r->lokasi;

        DB::table('tbl_orang')->insert([
            "id" => $masuk_orang,
            "name" => $masuk_orang,
            "lokasi" => $lokasi,
        ]);

        return redirect('/orang');
    }
}
