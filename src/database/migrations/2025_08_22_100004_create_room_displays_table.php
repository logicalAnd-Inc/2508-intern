<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('room_displays', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('客室名');
            $table->string('size')->comment('広さ');
            $table->string('capacity')->comment('定員');
            $table->string('price')->comment('料金');
            $table->boolean('member_only')->default(false)->comment('会員限定（0:フリー 1:会員限定）');
            $table->integer('sort')->default(0)->comment('表示順序');
            $table->boolean('is_active')->default(true)->comment('有効フラグ');
            $table->timestamps();

            $table->index(['is_active', 'sort']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room_displays');
    }
};