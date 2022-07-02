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
        Schema::create('persons_aptitude', function (Blueprint $table) {
            $table->id();

            $table->foreignId('person_id')
                ->nullable()
                ->constrained('persons')
                ->nullOnDelete();
            $table->foreignId('aptitude_id')
                ->nullable()
                ->constrained('aptitudes')
                ->nullOnDelete();
            $table->foreignId('job_offer_id')
                ->nullable()
                ->constrained('job_offers')
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
        Schema::dropIfExists('persons_aptitude');
    }
};
