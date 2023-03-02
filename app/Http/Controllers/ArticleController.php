<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    
    public function article() {
        $articles = DB::table('articles')->get();

        return View("articles.index", [ 'articles' => $articles]);
    }

    public function show(Request $request) {
        $id = $request->route('id');
        $article = DB::table('articles')->where('id', $id)->first();

        return View('articles.article', ['id' => $id, 'article' => $article]);
    }
}
