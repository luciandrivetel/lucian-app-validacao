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
        Schema::create('flows', function (Blueprint $table) {
            $table->id();
            $table->string('prod_name', 200)->nullable();
            $table->string('prod_code', 100)->nullable();
            $table->string('prev_prod_code', 200)->nullable();
            $table->integer('x_dim')->nullable();
            $table->integer('y_dim')->nullable();
            $table->integer('z_dim')->nullable();
            $table->integer('x_fold')->nullable();
            $table->integer('y_fold')->nullable();
            $table->integer('laetus')->nullable();
            $table->text('info')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flows');
    }
};
