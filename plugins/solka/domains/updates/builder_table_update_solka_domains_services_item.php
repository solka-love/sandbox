<?php namespace Solka\Domains\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSolkaDomainsServicesItem extends Migration
{
    public function up()
    {
        Schema::table('solka_domains_services_item', function($table)
        {
            $table->double('price', 10, 0);
        });
    }
    
    public function down()
    {
        Schema::table('solka_domains_services_item', function($table)
        {
            $table->dropColumn('price');
        });
    }
}
