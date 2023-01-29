<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCpmkAndIndikatorCplColumnToMatkulTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('matkul', function (Blueprint $table) {
            $table->text('id_indikator_cpl')->after('id_dosen')->nullable();
            $table->text('cpmk')->after('keterangan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('matkul', function (Blueprint $table) {
            $table->dropColumn('id_indikator_cpl');
            $table->dropColumn('cpmk');
        });
    }
}
