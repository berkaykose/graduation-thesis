<?php namespace Berkaykose\Vuerentacar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBerkaykoseVuerentacarUserGroups2 extends Migration
{
    public function up()
    {
        Schema::table('berkaykose_vuerentacar_user_groups', function($table)
        {
            $table->string('email', 100)->nullable()->change();
            $table->string('password', 255)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('berkaykose_vuerentacar_user_groups', function($table)
        {
            $table->string('email', 100)->nullable(false)->change();
            $table->string('password', 255)->nullable(false)->change();
        });
    }
}
