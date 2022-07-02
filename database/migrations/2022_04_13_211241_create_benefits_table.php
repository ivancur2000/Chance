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
        Schema::create('benefits', function (Blueprint $table) {
            $table->id();
            $table->integer('vacations')->nullable();
            $table->integer('vacation_bonus')->nullable();
            $table->integer('social_insurance')->nullable();
            $table->integer('life_insurance')->nullable();
            $table->integer('major_expenses_insurance')->nullable();
            $table->integer('bonus')->nullable();
            $table->integer('food_vouchers')->nullable();
            $table->integer('transportation')->nullable();
            $table->integer('saving_funds')->nullable();
            $table->integer('loans')->nullable();
            $table->integer('dining_room')->nullable();
            $table->integer('commissions')->nullable();


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
        Schema::dropIfExists('benefits');
    }
};
