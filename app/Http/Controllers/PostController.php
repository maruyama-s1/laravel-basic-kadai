<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function index() {
        $posts = DB::table('posts')->get();

        // データ取得確認
        // print_r($posts);

        return view('posts.index', compact('posts'));
    }

    public function show($id) {
        $posts = Post::find($id);

        return view('posts.show', compact('posts'));
    }

    public function create() {
        return view('posts.create');
    }

    public function store(Request $request) {
        // フォームのバリデーション
        $request->validate([
            'title' => 'required|max:20',
            'content' => 'required|max:200'
        ]);

        // フォームのデータをpostsテーブルに追加
        Post::create([
            'title' => $request->input('title'),
            'content' => $request->input('content')
        ]);

        // 投稿一覧ページにリダイレクト
        return redirect('/posts');
    }
}
