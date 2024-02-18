<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('club_thread', function (Blueprint $table) {
            $table->foreignId('club_id')->constrained('clubs');   //参照先のテーブル名をconstrainedに記載
            $table->foreignId('thread_id')->constrained('threads');
            $table->primary(['club_id', 'thread_id']);
            //中間テーブルにclubsテーブル、threadsテーブルの外部キーを作成しました
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('club_thread');
    }
};
