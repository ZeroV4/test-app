<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    
    public function article(Request $request) {
        $articles = DB::table('articles')->get();

        return View("articles.index", ['articles' => $articles]);
    }
}
