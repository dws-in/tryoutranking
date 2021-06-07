<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegisterTORequest;
use Illuminate\Http\Request;
use App\Models\RegisterTO;
use Symfony\Component\HttpFoundation\Response;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Services\QRCodeServiceInterface;
use Carbon\Carbon;

class RegisterTOController extends Controller
{
    protected $qrCode;

    public function __construct(QRCodeServiceInterface $qrCode)
    {
        $this->qrCode = $qrCode;
    }

    public function create(){

        return view('register-to.create');
    }

    public function store(StoreRegisterTORequest $request){
        RegisterTO::create($request->validated());

        $now = Carbon::now()->toDateTimeString();
        $qrcode = $this->qrCode->generate("$request->id . $now");

        return view('register-to.qrcode-lib1', ['qrcode' => $qrcode]);

        // return view('register-to.qrcode-lib2', ['qrcode' => $qrcode]);

    }

}
