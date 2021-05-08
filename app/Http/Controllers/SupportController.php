<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use App\Models\Support;
use App\Mail\SupportMail;

class SupportController extends Controller
{
  public function add()
  {
    return view('support-add');
  }

  public function create(Request $request)
  {
    $this->validate($request, [
      'email' => 'required',
      'description' => 'required'
    ]);
    $support = new Support();
    $support->email = $request->email;
    $support->description = $request->description;
    if ($support->save()) {
      $support->id = DB::table('supports')->count();
      Mail::to($support->email)->send(new SupportMail($support->id, $support->email, $support->description));
      return redirect('/support')->with('alert', 'Email sent successfully!');
    }
  }
}
