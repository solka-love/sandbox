<?php namespace Solka\Domains\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSolkaDomainsServicesItem4 extends Migration
{
    public function up()
    {
        Schema::table('solka_domains_services_item', function($table)
        {
            $table->boolean('is_published');
        });
    }
    
    public function down()
    {
        Schema::table('solka_domains_services_item', function($table)
        {
            $table->dropColumn('is_published');
        });
    }
}