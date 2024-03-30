<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddKategoriColumnGejalas extends Migration
{
    public function up()
    {
        Schema::table('gejalas', function (Blueprint $table) {
            $table->string('kategori')->after('nama');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('gejalas', function (Blueprint $table) {
            $table->dropColumn('kategori');
        });
    }
}
