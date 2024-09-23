<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function listuser()
    {
        // satuan
        $datauser = DB::table('tbl_user')->get();

        return view('user', [
            "user" => $datauser,
        ]);
    }



    public function adduser(Request $r)
    {
        return view('adduser');
    }

    public function simpan_user(Request $r)
    {
        $masuk_name = $r->name;
        $hp = $r->hp;
        $id = $r->id;

        DB::table('tbl_user')->insert([
            "name" => $masuk_name,
            "hp" => $hp,
            "id" => $id,
        ]);

        return redirect('/user');
    }

    // delete
    public function delete_user(Request $r)
    {
        $id = $r->id;

        DB::table('tbl_user')->where("id", $id)->delete();

        return response()->json("SUCCESS");
    }





    // edit
    public function edit_user(Request $r)
    {
        $id = $r->id;

        $rasd = DB::table('tbl_user')->where("id", $id)->first();

        $data = [
            "data" => $rasd
        ];

        return view('edit_user', $data);
    }

    public function update_user(Request $r)
    {
        $id = $r->id;
        $name = $r->name;

        DB::table('tbl_user')->where("id", $id)->update([
            "name" => $name,
        ]);

        return redirect('/user');
    }

    public function showUser(Request $req)
    {
        $output = '';

        $data = DB::table('tbl_user')->get();

        $output .= '<table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">Hp</th>
                            <th scope="col">Id</th>
                            <th scope="col">aksi</th>
                        </tr>
                        </thead>
                        <tbody>';

        if ($data) {
            foreach ($data as $i => $us) {
                $output .= "<tr>
                                <td>".$us->name."</td>
                                <td>".$us->hp."</td>
                                <td>".$us->id."</td>
                                <td>
                                    <a class='btn btn-primary' href='/edit_user?id=".$us->id.">Edit</a>
                                    <a class='btn btn-danger deleteButton' href='/deleteuser?id=".$us->id."' data-iduser=".$us->id.">Delete</a>
                                </td>
                            </tr>";
            }
        }

        $output .= '</tbody></table>';

        return $output;
    }
}

