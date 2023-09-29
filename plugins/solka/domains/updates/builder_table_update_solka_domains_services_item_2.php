<?php namespace Solka\Domains\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSolkaDomainsServicesItem2 extends Migration
{
    public function up()
    {
        Schema::table('solka_domains_services_item', function($table)
        {
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::table('solka_domains_services_item', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
