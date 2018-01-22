<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class CreateController extends Controller
{
    public function create()
    {
        return view('create');

    }

    public function add(Request $request)
    {
//        $articles=Article::all();
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);
//        return 'Validation Pass';
        $articles = new Article;
        $articles->title = $request->input('title');
        $articles->description = $request->input('description');
        $articles->save();
        return redirect('/')->with('info', 'Article Saved Successfully');

    }

    public function update($id)
    {
        $articles = Article::find($id);
        return view('update', ['articles' => $articles]);
    }

    public function edit(Request $request, $id)
    {
//        $articles = Article::find($id);
//        return view('update', ['articles' => $articles]);
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);
        $data = array(
            'title' => $request->input('title'),
            'description' => $request->input('description')
        );
        Article::where('id', $id)
            ->update($data);
        return redirect('/')->with('info', 'Article Updated Successfully!');
    }

    public function read($id)
    {
        $articles = Article::find($id);
        return view('read', ['articles' => $articles]);
    }

    public function delete($id)
    {
        Article::where('id', $id)
            ->delete();
        return redirect('/')->with('info', 'Article Deleted Successfully!');
    }
}
