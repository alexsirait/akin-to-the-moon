<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrankController extends Controller
{
    public function listhewan()
    {
        // satuan
        $datahewan = DB::table('tbl_hewan')->get();


        return view('Hewan', [
            "hewan" => $datahewan,
            "datahewan" => $datahewan
        ]);
    }

    public function addhewan(Request $r)
    {
        return view('tambah_hewan');
    }

    public function simpan_hewan(Request $r)
    {
        $masuk_hewan = $r->id;
        $masuk_nama = $r->nama;
        $jenis = $r->jenis;

        DB::table('tbl_hewan')->insert([
            "id" => $masuk_hewan,
            "nama" => $masuk_nama,
            "jenis" => $jenis,
        ]);

        return redirect('/hewan');
    }
}
