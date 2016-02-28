<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use \Response;
use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    /**
     * Send back all comments as JSON
     *
     * @return Response
     */
    public function index()
    {
        return \Response::json(Article::get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        Article::create(array(
            'author' => Input::get('author'),
            'content' => Input::get('text')
        ));

        return Response::json(array('success' => true));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Article::destroy($id);

        return Response::json(array('success' => true));
    }

    public function increase($id)
    {
        $article = Article::find($id);

        $article->visitors += 1;

        $article->save();

        return Response::json(array('success' => true));
    }
}
