<?php namespace Berkaykose\Vuerentacar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBerkaykoseVuerentacarUserRecords extends Migration
{
    public function up()
    {
        Schema::create('berkaykose_vuerentacar_user_records', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('surname')->nullable();
            $table->string('email', 100);
            $table->string('password');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('berkaykose_vuerentacar_user_records');
    }
}
