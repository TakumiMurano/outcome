<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thread;
//Threadクラス(モデル)をThreadControllerクラス(コントローラ)で使えるようにしている

class ThreadController extends Controller
{
    public function (Thread $thread)
    {
        return $thread->get();
    }
    //Threadクラス(モデルクラス)から新しいインスタンス$threadを作り、$threadの中身を戻り値にする
}
