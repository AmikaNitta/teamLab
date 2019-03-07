<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTable extends Migration
{
        /**
     * マイグレーション実行
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('comment')->nullable();
            $table->string('github_id');
            $table->timestamps();
        });
    }

    /**
     * マイグレーションを元に戻す
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user');
    }
}
