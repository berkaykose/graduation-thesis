<?php namespace Berkaykose\Vuerentacar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBerkaykoseVuerentacarVehicles extends Migration
{
    public function up()
    {
        Schema::table('berkaykose_vuerentacar_vehicles', function($table)
        {
            $table->integer('price')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('berkaykose_vuerentacar_vehicles', function($table)
        {
            $table->dropColumn('price');
        });
    }
}
