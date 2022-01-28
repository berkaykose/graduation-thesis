<?php namespace Berkaykose\Vuerentacar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBerkaykoseVuerentacarDates extends Migration
{
    public function up()
    {
        Schema::create('berkaykose_vuerentacar_dates', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->dateTime('pickup');
            $table->dateTime('drop_off');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('berkaykose_vuerentacar_dates');
    }
}
