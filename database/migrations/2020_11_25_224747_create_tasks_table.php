<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        //Schema::create　→　テーブルを新しく作ってください
        //引数の'messages'これは指定した名前でデータ作って
        //「新しく、messaagesっていう名前のテーブルを作って」
        Schema::create('tasks', function (Blueprint $table) {
            
            //テーブルの中身を指定している。
            $table->bigIncrements('id');
            //文字列クラスでcontetってなまえ
            //参考
            //https://readouble.com/laravel/5.5/ja/migrations.html
            $table->string('content');    // contentカラム追加
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
