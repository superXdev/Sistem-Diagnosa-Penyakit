<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rules', function (Blueprint $table) {
            $table->id();
            $table->string('kode_penyakit');
            $table->boolean('G001')->default(false);
            $table->boolean('G002')->default(false);
            $table->boolean('G003')->default(false);
            $table->boolean('G004')->default(false);
            $table->boolean('G005')->default(false);
            $table->boolean('G006')->default(false);
            $table->boolean('G007')->default(false);
            $table->boolean('G008')->default(false);
            $table->boolean('G009')->default(false);
            $table->boolean('G010')->default(false);
            $table->boolean('G011')->default(false);
            $table->boolean('G012')->default(false);
            $table->boolean('G013')->default(false);
            $table->boolean('G014')->default(false);
            $table->boolean('G015')->default(false);
            $table->boolean('G016')->default(false);
            $table->boolean('G017')->default(false);
            $table->boolean('G018')->default(false);
            $table->boolean('G019')->default(false);
            $table->boolean('G020')->default(false);
            $table->boolean('G021')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rules');
    }
}
