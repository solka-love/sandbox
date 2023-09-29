<?php namespace Solka\Message\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSolkaMessage extends Migration
{
    public function up()
    {
        Schema::table('solka_message_', function($table)
        {
            $table->dateTime('update_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('solka_message_', function($table)
        {
            $table->dropColumn('update_at');
        });
    }
}
