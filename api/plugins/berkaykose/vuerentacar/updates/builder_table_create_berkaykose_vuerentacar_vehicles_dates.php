<?php namespace Berkaykose\Vuerentacar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBerkaykoseVuerentacarVehiclesDates extends Migration
{
    public function up()
    {
        Schema::create('berkaykose_vuerentacar_vehicles_dates', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('vehicle_id');
            $table->integer('date_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('berkaykose_vuerentacar_vehicles_dates');
    }
}
