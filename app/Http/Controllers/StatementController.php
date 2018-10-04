<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Statement;
use Image;
use Storage;
use App\Util\ImageStorage;

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

  public function store(Request $request)
  {
    $this->validate($request, [
      'title' => 'required'
    ]);

    $imglink = request('img');

    if ($request->hasFile('image')) {
      $image = $request->image;

      if($image->isValid()) {

        $img_res = Image::make($image)->fit(300, 300);

        $path = ImageStorage::storeImage($img_res, 'public');
        $imglink = url($path);
      }
    }

    $statement = Statement::create([
      'title' => request('title'),
      'subtitle' => request('subtitle'),
      'img' => $imglink
    ]);

    return redirect()->action('StatementController@show', $statement->id);
  }
}
