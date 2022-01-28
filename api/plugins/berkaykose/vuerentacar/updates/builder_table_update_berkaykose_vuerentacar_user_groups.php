<?php namespace Berkaykose\Vuerentacar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBerkaykoseVuerentacarUserGroups extends Migration
{
    public function up()
    {
        Schema::rename('berkaykose_vuerentacar_user_records', 'berkaykose_vuerentacar_user_groups');
    }
    
    public function down()
    {
        Schema::rename('berkaykose_vuerentacar_user_groups', 'berkaykose_vuerentacar_user_records');
    }
}
