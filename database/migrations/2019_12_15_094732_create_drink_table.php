<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrinkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drink', function (Blueprint $table) {
            $table->bigIncrements('id')->comment("ドリンクID");
            $table->string('name')->comment("ドリンク名");
            $table->integer('proof')->comment("アルコール度数");
            $table->timestamps();
        });

        DB::statement("ALTER TABLE drink COMMENT '酒テーブル'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drink');
    }
}
