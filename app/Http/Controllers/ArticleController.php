<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    
    public function article(Request $request) {
        $id = $request->route('id');

        return View("articles/index", ['id' => $id]);
    }
}
