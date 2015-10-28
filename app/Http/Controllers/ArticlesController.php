<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleRequest;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;

class ArticlesController extends Controller
{


    function __construct()
    {
        $this->middleware("auth", ['only' => ['create','edit','store','update']]);
    }

    public function index()
    {
        Carbon::setLocale('fr');
        if (Auth::check()) {
            $articles =  Auth::user()->articles()->latest('published_at')->published()->get();
        } else {
            $articles =  Article::latest('published_at')->published()->get();
        }
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

    public function store(ArticleRequest $request)
    {
        $article = new Article($request->all());

        Auth::user()->articles()->save($article);

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
