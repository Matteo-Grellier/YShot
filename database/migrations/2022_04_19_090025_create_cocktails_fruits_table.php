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
        Schema::create('cocktails_fruits', function (Blueprint $table) {
            $table->id();
            $table->integer("quantity");
            $table->unsignedBigInteger('cocktails_id');
            $table->unsignedBigInteger('fruits_id');
            $table->timestamps();
        });

        Schema::table('cocktails_fruits', function (Blueprint $table) {
            $table->foreign('fruits_id')->references('id')->on('fruits_tables')->onDelete('cascade')->constrained();
            $table->foreign('cocktails_id')->references("id")->on("cocktails")->onDelete('cascade')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cocktails_fruits');
    }
};
