<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegisterTORequest;
use App\Models\Cluster;
use App\Models\RegisterTO;
use App\Models\Score;
use App\Models\Tryout;
use App\Services\QRCodeServiceInterface;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RegisterTOController extends Controller
{

    public function index()
    {
        //

    }

    protected $qrCode;

    public function __construct(QRCodeServiceInterface $qrCode)
    {
        $this->qrCode = $qrCode;

    }

    public function create($id){

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
        $register = RegisterTO::create($data);

        $score = new Score();
        $score->register_id = $register->id;
        $score->indonesia = 0;
        $score->english = 0;
        $score->mathematic = 0;
        $score->physic = 0;
        $score->biology = 0;
        $score->chemistry = 0;
        $score->geography = 0;
        $score->economy = 0;
        $score->history = 0;
        $score->sociology = 0;
        $score->save();

        return redirect()->route('tryouts.index');
        /*
        * use for endroid library
        */
        //return view('register-to.qrcode-lib1', ['qrcode' => $qrcode]);

        /*
        * use for simplesoftwareIO library
        */
        // return view('register-to.qrcode-lib2', ['qrcode' => $qrcode]);

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
