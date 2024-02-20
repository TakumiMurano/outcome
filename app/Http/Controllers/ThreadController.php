<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thread;   //Threadクラス(モデル)をThreadControllerクラス(コントローラ)で使えるようにしている

class ThreadController extends Controller
{
    public function index(Thread $thread)
    {
        return view('threads.index')->with(['threads' => $thread->get()]);
    }
    //blade内で使う変数'threads'と設定。'threads'の中身にgetを使い、インスタンス化した$threadを代入。
}
