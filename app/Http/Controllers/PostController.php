<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //
    public function index() {
        $posts = DB::table('posts')->get();

        // データ取得確認
        // print_r($posts);

        return view('posts.index', compact('posts'));
    }
}
