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
        Schema::create('curriculums', function (Blueprint $table) {
            $table->id();

            $table->string('description');
            $table->string('salary_aspiration');
            $table->string('modality');
            $table->string('type_job');

            $table->foreignId('profession_id')
                ->nullable()
                ->constrained('professions')
                ->nullOnDelete();

            $table->foreignId('person_id')
                ->nullable()
                ->constrained('persons')
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
        Schema::dropIfExists('curriculums');
    }
};
