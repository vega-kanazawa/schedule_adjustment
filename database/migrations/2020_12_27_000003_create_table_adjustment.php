<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableAdjustment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adjustment', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('ID');
            $table->string('name', 64)->comment('名前');
            $table->integer('disp_order')->default(1)->comment('表示順');
            $table->dateTime('created_at', 0)->comment('作成日時');
            $table->dateTime('updated_at', 0)->comment('更新日時');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adjustment');
    }
}
