<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class InputformController extends Controller
{
  public function index()
  {
    return view('index');
  }

  public function create(Request $request)
  {
    $validatedData = $request->validate([
      'name' => 'required',
      'email' => 'required|email',
    ]);

    Form::create([
      'name' => $request->input('name'),
      'email' => $request->input('email'),
    ]);

    return redirect()->route('form.thanks');
  }

  public function thanks()
  {
    return view('thanks');
  }
}