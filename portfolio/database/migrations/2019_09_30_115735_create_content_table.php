<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content', function (Blueprint $table) {
            // 記事ID
            $table->bigIncrements('content_id');
            // 記事タイトル
            $table->string('content_title','40');
            // 記事タグ１
            $table->string('content_tag_1','10')->nullable();
            // 記事タグ２
            $table->string('content_tag_2','10')->nullable();
            // 記事タグ３
            $table->string('content_tag_3','10')->nullable();
            // 投稿者ID
            $table->integer('user_id');
            // 投稿者名
            $table->string('user_name','40');
            // 記事内容
            $table->string('content','1000');
            // 記事投稿日時,記事更新日時
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
        Schema::dropIfExists('content');
    }
}
