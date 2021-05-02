<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JadwalTOController extends Controller
{
    //
    public function getJadwal()
    {
        //ambil data dari database
        $jadwalTO = DB::table('jadwaltos')->paginate(10);
        //kirim ke view
        return view('jadwalTO',['jadwaltos' => $jadwalTO]);
    }
}
