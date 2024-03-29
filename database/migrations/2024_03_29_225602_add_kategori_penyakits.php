<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddKategoriPenyakits extends Migration
{
    public function up()
    {
        Schema::table('penyakits', function (Blueprint $table) {
            $table->string('kategori')->nullable()->after('nama');
        });
    }

    public function down()
    {
        Schema::table('penyakits', function (Blueprint $table) {
            $table->dropColumn('kategori');
        });
    }
}
