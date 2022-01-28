<?php namespace Berkaykose\Vuerentacar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBerkaykoseVuerentacarLocations extends Migration
{
    public function up()
    {
        Schema::create('berkaykose_vuerentacar_locations', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('berkaykose_vuerentacar_locations');
    }
}
