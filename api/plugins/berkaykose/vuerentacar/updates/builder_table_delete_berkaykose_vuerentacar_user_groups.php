<?php namespace Berkaykose\Vuerentacar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteBerkaykoseVuerentacarUserGroups extends Migration
{
    public function up()
    {
        Schema::dropIfExists('berkaykose_vuerentacar_user_groups');
    }
    
    public function down()
    {
        Schema::create('berkaykose_vuerentacar_user_groups', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 255)->nullable();
            $table->string('surname', 255)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('password', 255)->nullable();
        });
    }
}
