<?php

namespace App\Http\Controllers;

use App\Article;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;

class ArticlesController extends Controller
{
    public function index()
    {
        Carbon::setLocale('fr');
        $articles = Article::latest('published_at')->published()->get();
        return view( 'articles.index' )->with( 'articles', $articles);
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

    public function update($id, Request $request)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());
        return redirect( 'articles' );
    }
}
