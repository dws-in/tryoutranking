<?php

namespace App\Http\Controllers;

use App\Models\Pembahasan;
use App\Models\RegisterTryout;
use App\Models\Tryout;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MyTryOutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = Auth::user()->id;
        $role = Auth::user()->role_id;
        if ($role == 3){
            $tryouts = RegisterTryout::where('user_id', $user)
                    ->get();

            $file = Pembahasan::all();
            return view('myTryout.index-register', compact('tryouts', 'file'));
        }
        elseif (($role == 1) or ($role == 2)) {
            $tryouts = Tryout::where('user_id', $user)
                    ->get();

            return view('myTryout.index-show', ['tryouts' => $tryouts]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = new Pembahasan();
        $file = $request->file;
        $filename = $file->getClientOriginalName();

        $request->file->move('assets', $filename);
        $data->file = $filename;

        $data->tryout_id = $request->tryout_id;
        $data->title = $request->title;
        $data->save();

        return redirect()->back()->with('message', 'Pembahasan berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $tryout = Tryout::find($id);
        return view('myTryout.upload', compact('tryout'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function download(Request $request, $id)
    {
        $tryout = Tryout::find($id);
        try {
            $pembahasan = Pembahasan::where('tryout_id', $id)
                                ->firstOrFail();
        } catch (ModelNotFoundException $exception) {
            return redirect()->back()->with('error', 'Pembahasan belum tersedia');
        }

        if (now() > $tryout->due and $pembahasan != NULL)
        {
            //  $file = Pembahasan::where('tryout_id', $id)
            //                 ->first();

            return response()->download(public_path('assets/'.$pembahasan->file));
        }
        else {
            return redirect()->back()->with('error', 'Waktu pengerjaan Tryout belum berakhir');
        }
    }
}
