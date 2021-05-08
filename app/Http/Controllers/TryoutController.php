<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tryout;

class TryoutController extends Controller
{
  public function index()
  {
    $tryouts = DB::table('tryouts')->select('id', 'name', 'description', 'held')->where('user_id', auth()->user()->id)->get();
    return view('dashboard', compact('tryouts'));
  }

  public function add()
  {
    return view('tryout-add');
  }

  public function create(Request $request)
  {
    $this->validate($request, [
      'name' => 'required',
      'description' => 'required',
      'held' => 'required'
    ]);
    $tryout = new Tryout();
    $tryout->name = $request->name;
    $tryout->description = $request->description;
    $tryout->held = $request->held;
    $tryout->user_id = auth()->user()->id;
    $tryout->save();
    return redirect('/dashboard');
  }

  public function edit(Tryout $tryout)
  {

    if (auth()->user()->id == $tryout->user_id) {
      return view('tryout-edit', compact('tryout'));
    } else {
      return redirect('/dashboard');
    }
  }

  public function update(Request $request, Tryout $tryout)
  {
    if (isset($_POST['delete'])) {
      $tryout->delete();
      return redirect('/dashboard');
    } else {
      $this->validate($request, [
        'name' => 'required',
        'description' => 'required',
        'held' => 'required'
      ]);
      $tryout->name = $request->name;
      $tryout->description = $request->description;
      $tryout->held = $request->held;
      $tryout->save();
      return redirect('/dashboard');
    }
  }
}
