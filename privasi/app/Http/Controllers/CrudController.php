<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Input;

class CrudController extends Controller
{
    public function tambahdata(){
        $data = array(
            'nama' => Input::get('nama'),
            'alamat' => Input::get('alamat'),
            'kelas' => Input::get('kelas')
        );
        DB::table('siswa')->insert($data);

    }
}
