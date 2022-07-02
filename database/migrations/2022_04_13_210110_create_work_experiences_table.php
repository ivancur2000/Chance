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
        Schema::create('work_experiences', function (Blueprint $table) {
            $table->id();

            $table->string('rol');
            $table->string('company');
            $table->text('responsabilites');
            $table->datetime('start_date');
            $table->datetime('end_date');
            $table->integer('intership');
            $table->string('location_company');


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
        Schema::dropIfExists('work_experiences');
    }
};
