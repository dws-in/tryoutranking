<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BuatTOController extends Controller
{
    //
    public function buatTO()
    {
        return view('BuatTO');
    }

    public function storeTO(Request $request)
    {
        // insert data ke table jadwalTO
        DB::table('jadwaltos')->insert([
            'namato' => $request->namato,
            'organizer' => $request->organizer,
            'rumpunmapel' => $request->rumpunto,
            'tanggalto' => $request->tanggalTO
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/jadwalto');

    }
}
