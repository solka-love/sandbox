<?php namespace Solka\Message\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSolkaMessage2 extends Migration
{
    public function up()
    {
        Schema::table('solka_message_', function($table)
        {
            $table->renameColumn('update_at', 'updated_at');
        });
    }
    
    public function down()
    {
        Schema::table('solka_message_', function($table)
        {
            $table->renameColumn('updated_at', 'update_at');
        });
    }
}
