<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Statement;

class StatementController extends Controller
{
  public function show(Request $request, $id)
  {
    if(str_contains($request->header('User-Agent'), 'WhatsApp'))
    {
      $statement = Statement::find($id);
      $statement->delete();
      return view('statements.show_whatsapp', compact('statement'));
    }
    else
    {
      $link = action('StatementController@show', $id);
      return view('statements.show', compact('link'));
    }
  }

  public function store()
  {
    $this->validate(request(), [
      'title' => 'required'
    ]);

    $statement = Statement::create([
      'title' => request('title'),
      'subtitle' => request('subtitle'),
      'img' => request('img')
    ]);

    return redirect()->action('StatementController@show', $statement->id);
  }
}
