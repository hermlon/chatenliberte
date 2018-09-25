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
      return view('statements.title', compact('statement'));
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
      'statement' => 'required|max:40'
    ]);

    $statement = Statement::create([
      'body' => request('statement')
    ]);

    return redirect()->action('StatementController@show', compact('statement'));
  }
}
