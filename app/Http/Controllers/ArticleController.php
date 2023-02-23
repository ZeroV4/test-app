<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    
    public function article(Request $request) {
        $id = $request->route('id');
        $article = DB::table('articles')->where('id', $id)->first();

        return View("articles.index", ['id' => $id, 'article' => $article]);
    }
}
