<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    public function index()
    {
        return view( 'articles.index' )->with( 'articles', Article::all() );
    }

    public function show($id)
    {
        return view( 'articles.show' )->with( 'article', Article::find($id) );
    }

    public function create()
    {
        return view( 'articles.create' );
    }

    public function store(Request $request)
    {
        Article::create($request->all());
        return redirect('/articles');
    }

    public function edit($id)
    {
        $article = Article::findOrFail( $id );

        return view( 'articles.edit' )->with( 'article', $article );
    }

    public function update()
    {
        return redirect();
    }
}
