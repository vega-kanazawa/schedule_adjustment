<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableUserSchedule extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_schedule', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('ID');
            $table->unsignedBigInteger('user_id')->comment('ユーザID');
            $table->unsignedBigInteger('schedule_id')->comment('スケジュールID');
            $table->unsignedBigInteger('adjustment_id')->comment('調整ID');
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
        Schema::dropIfExists('user_schedule');
    }
}
