<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInitialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 店舗一覧
        Schema::create('store_lists', function (Blueprint $table) {
            $table->increments('id')->comment('ID');
            $table->string('store_name', 128)->comment('店舗名');
            $table->string('store_address', 128)->comment('店舗住所');
            $table->string('store_url', 128)->comment('店舗URL');
            $table->string('impressions', 128)->comment('感想');
            $table->string('registered_person', 128)->comment('登録者');
            $table->integer('category_id')->comment('カテゴリID');
            $table->timestamps();
        });

        // カテゴリ一覧
        Schema::create('categorys', function (Blueprint $table) {
            $table->increments('id')->comment('ID');
            $table->string('category_name', 128)->comment('カテゴリ名');
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
        Schema::dropIfExists('store_infos');
        Schema::dropIfExists('categorys');
    }
}
