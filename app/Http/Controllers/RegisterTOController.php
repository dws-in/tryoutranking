<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegisterTORequest;
use Illuminate\Http\Request;
use App\Models\RegisterTO;
use Symfony\Component\HttpFoundation\Response;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Carbon\Carbon;

class RegisterTOController extends Controller
{
    public function create(){

        return view('register-to.create');
    }

    public function store(StoreRegisterTORequest $request){
        RegisterTO::create($request->validated());

        $now = Carbon::now()->toDateTimeString();
        $qrcode = QrCode::size(200)->style('round')->generate("$request->id . $now");
        return view('register-to.qrcode', ['qrcode' => $qrcode]);
    }

}
