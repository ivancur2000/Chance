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
        Schema::create('persons', function (Blueprint $table) {
            $table->id();

            $table->string('life_motto')->nullable();
            $table->text('description');
            $table->string('extension',5);
            $table->integer('phone');
            $table->string('facebook');
            $table->string('linkedin');
            $table->string('twitter');
            $table->string('tiktok');
            $table->string('web_site');
            $table->string('zone')->nullable();
            $table->string('street')->nullable();
            $table->string('number')->nullable();
            $table->string('date_birth')->nullable();
            $table->string('civil_status')->nullable();

            $table->foreignId('user_id')
            ->nullable()
            ->constrained('users')
            ->nullOnDelete();

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
        Schema::dropIfExists('persons');
    }
};
