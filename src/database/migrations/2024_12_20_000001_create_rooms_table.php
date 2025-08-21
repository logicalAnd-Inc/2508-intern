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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // 部屋名: 和室8畳、洋室ツイン等
            $table->enum('type', ['和室', '洋室', '特別室']); // 部屋タイプ
            $table->integer('capacity'); // 定員数
            $table->decimal('price_per_night', 10, 2); // 1泊あたりの料金
            $table->text('description')->nullable(); // 部屋の説明
            $table->string('image_path')->nullable(); // 部屋の画像パス
            $table->boolean('is_available')->default(true); // 利用可能フラグ
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
        Schema::dropIfExists('rooms');
    }
};
