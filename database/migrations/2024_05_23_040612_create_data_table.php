<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->float('tegangan');
            $table->float('arus');
            $table->float('faktor_daya');
            $table->float('daya_aktif');
            $table->float('daya_reaktif');
            $table->float('daya_semu');
            $table->float('total_daya_aktif');
            $table->float('total_daya_reaktif');
            $table->float('total_daya_semu');
            $table->float('total_faktor_daya');
            $table->float('frekuensi');
            $table->float('reactive_power_demand');
            $table->float('apparent_power_demand');
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
        Schema::dropIfExists('data');
    }
}
