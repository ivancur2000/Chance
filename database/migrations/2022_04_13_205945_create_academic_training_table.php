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
        Schema::create('academic_training', function (Blueprint $table) {
            $table->id();

            $table->string('institution');
            $table->string('academic_level');
            $table->date('start_date');
            $table->date('end_date');
            //TODO: Volver el valo a unico
            $table->string('tesis');

            $table->foreignId('curriculum_id')
                ->nullable()
                ->constrained('curriculums')
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
        Schema::dropIfExists('academic_training');
    }
};
