<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegisterTORequest;
use App\Models\Cluster;
use App\Models\RegisterTO;
use App\Models\Tryout;
use App\Services\QRCodeServiceInterface;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RegisterTOController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $qrCode;

    public function __construct(QRCodeServiceInterface $qrCode)
    {
        $this->qrCode = $qrCode;

    }

    public function create($id){

        // $tryout = DB::table('tryouts')
        //     ->where('id', $id)
        //     ->first();
        $tryout = Tryout::find($id);
        $clusters = Cluster::all();

        return view('register-to.create')
                ->with('tryout', $tryout)
                ->with('clusters', $clusters);
    }

    public function store(StoreRegisterTORequest $request, $id){
        // RegisterTO::create($request->validated());

        // $now = Carbon::now()->toDateTimeString();
        // $qrcode = $this->qrCode->generate("$request->id . $now");
        //$tryout = DB::table('tryouts')->where('id',$id)->get();

        $tryout = DB::table('tryouts')
            ->where('id', $id)
            ->first();
        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        $data['tryout_id'] = $tryout->id;
        RegisterTO::create($data);

        /*
        * use for endroid library
        */
        //return view('register-to.qrcode-lib1', ['qrcode' => $qrcode]);
        return redirect()->route('tryouts.index');

        /*
        * use for simplesoftwareIO library
        */
        // return view('register-to.qrcode-lib2', ['qrcode' => $qrcode]);

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
}
