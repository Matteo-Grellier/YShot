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
        Schema::create('cocktails_alcools', function (Blueprint $table) {
            $table->id();
            $table->integer("quantity");
            $table->unsignedBigInteger('cocktails_id');
            $table->unsignedBigInteger('table_alcools_id');
            $table->timestamps();
        });

        Schema::table('cocktails_alcools', function (Blueprint $table) {
            $table->foreign('table_alcools_id')->references("id")->on("table_alcools")->onDelete('cascade')->constrained();
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
        Schema::dropIfExists('cocktails_alcools');
    }
};
