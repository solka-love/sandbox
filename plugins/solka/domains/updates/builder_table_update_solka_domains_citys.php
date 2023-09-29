<?php namespace Solka\Domains\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSolkaDomainsCitys extends Migration
{
    public function up()
    {
        Schema::table('solka_domains_citys', function($table)
        {
            $table->renameColumn('city', 'name');
        });
    }
    
    public function down()
    {
        Schema::table('solka_domains_citys', function($table)
        {
            $table->renameColumn('name', 'city');
        });
    }
}