<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Statement;

class StatementController extends Controller
{
  public function show(Request $request, Statement $statement)
  {
    if(str_contains($request->header('User-Agent'), 'WhatsApp'))
    {
      $statement->delete();
      return view('statements.show_whatsapp', compact('statement'));
    }
    else
    {
      $link = action('StatementController@show', $statement);
      return view('statements.show', compact('statement', 'link'));
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

    return redirect()->action('StatementController@show', compact('statement'));
  }
}
