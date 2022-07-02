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
        Schema::create('job_positions_function', function (Blueprint $table) {
            $table->foreignId('job_position_id')
                ->nullable()
                ->constrained('job_positions')
                ->nullOnDelete();

            $table->foreignId('function_id')
                ->nullable()
                ->constrained('functions')
                ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_positions_function');
    }
};
