<?php namespace Berkaykose\Vuerentacar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBerkaykoseVuerentacarVhcLct extends Migration
{
    public function up()
    {
        Schema::create('berkaykose_vuerentacar_vhc_lct', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('vehicle_id');
            $table->integer('location_id');
            $table->primary(['vehicle_id','location_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('berkaykose_vuerentacar_vhc_lct');
    }
}
