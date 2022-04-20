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
        Schema::create('cocktails_sirops', function (Blueprint $table) {
            $table->id();
            $table->integer("quantity");
            $table->unsignedBigInteger('cocktails_id');
            $table->unsignedBigInteger('sirops_id');
            $table->timestamps();
        });

        Schema::table('cocktails_sirops', function (Blueprint $table){
            $table->foreign('sirops_id')->references("id")->on("table_sirops")->onDelete('cascade')->constrained();
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
        Schema::dropIfExists('cocktails_sirops');
    }
};
