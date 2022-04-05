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
        Schema::create('table_alcools', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->integer('degré');
            $table->unsignedBigInteger('alcool_id')->index();
            $table->foreign('alcool_id')->references('id')->on('alcools_types');
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
        Schema::dropIfExists('table_alcools');
    }
};
