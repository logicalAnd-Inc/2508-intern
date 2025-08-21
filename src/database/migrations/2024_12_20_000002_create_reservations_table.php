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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('room_id')->constrained()->onDelete('cascade');
            $table->string('guest_name'); // 宿泊者名
            $table->string('guest_email'); // メールアドレス
            $table->string('guest_phone'); // 電話番号
            $table->date('check_in_date'); // チェックイン日
            $table->date('check_out_date'); // チェックアウト日
            $table->integer('number_of_guests'); // 宿泊人数
            $table->decimal('total_price', 10, 2); // 総料金
            $table->enum('status', ['pending', 'confirmed', 'cancelled'])->default('pending'); // 予約ステータス
            $table->text('special_requests')->nullable(); // 特別リクエスト
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
        Schema::dropIfExists('reservations');
    }
};
