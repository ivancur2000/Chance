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
        Schema::create('job_offers', function (Blueprint $table) {
            $table->id();

            $table->string('title')->nullable();
            $table->string('type_job')->nullable();
            $table->string('modality')->nullable();
            $table->string('salary')->nullable();
            $table->string('description')->nullable();

           $table->foreignId('company_id')
            ->nullable()
            ->constrained('companies')
            ->nullOnDelete();

            $table->foreignId('benefit_id')
            ->nullable()
            ->constrained('benefits')
            ->nullOnDelete();
            $table->foreignId('profession_id')
            ->nullable()
            ->constrained('professions')
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
        Schema::dropIfExists('job_offers');
    }
};
