<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HewanController extends Controller
{
    public function listhewan()
    {
        // satuan
        $datahewan = DB::table('tbl_hewan')->get();

        return view('hewan', [
            "hewan" => $datahewan,
        ]);
        dd(datahewan);
    }

    public function addhewan(Request $r)
    {
        return view('addhewan');
    }


public function simpan_hewan(Request $r)
{
    $id = $r->id;
    $nama = $r->nama;
    $jenis = $r->jenis;

    DB::table('tbl_hewan')->insert([
        "id" => $id,
        "nama" => $nama,
        "jenis" => $jenis,
    ]);

    return redirect('/hewan');
}
// delete
public function deletehewan(Request $r)
{
    $id = $r->id;

    DB::table('tbl_hewan')->where("id", $id)->delete();

    return redirect('/hewan');
}


    // edit
    public function edithewan(Request $r)
    {
        $id = $r->id;

        $hehe = DB::table('tbl_hewan')->where("id", $id)->first();

        $data = [
            "data" => $hehe
        ];

        return view('edit_hewan', $data);
    }

    public function updatehewan(Request $r)
    {
        $id = $r->id;
        $nama = $r->nama;
        $jenis =$r->jenis;

        DB::table('tbl_hewan')->where("id", $id)->update([
            "nama" => $nama,
            "jenis" => $jenis
        ]);

        return redirect('/hewan');
    }

}
