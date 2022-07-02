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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('sales_amount');

            $table->string('sales_type');
            //foraneas

            $table->foreignId('curriculum_id')
            ->nullable()
            ->constrained('curriculums')
            ->nullOnDelete();

            $table->foreignId('companie_id')
            ->nullable()
            ->constrained('companies')
            ->nullOnDelete();

            $table->foreignId('payment_method_id')
            ->nullable()
            ->constrained('payment_method')
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
        Schema::dropIfExists('sales');
    }
};
