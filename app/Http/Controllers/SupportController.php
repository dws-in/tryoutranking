<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use App\Models\Support;
use App\Mail\SupportMail;
use App\Http\Requests\StoreSupportRequest;
use Symfony\Component\HttpFoundation\Response;

class SupportController extends Controller
{

    public function index(){
        abort_if(Gate::denies('support_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('support.create');
    }

  public function create()
  {
    abort_if(Gate::denies('support_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
    return view('support.create');
  }

  public function store(StoreSupportRequest $request)
  {
    $support = Support::create($request->validated());

    return redirect()->route('support.create')->with('alert', 'Email sent successfully!');
  }
}
