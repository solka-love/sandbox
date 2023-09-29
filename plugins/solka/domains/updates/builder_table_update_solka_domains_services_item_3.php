<?php namespace Solka\Domains\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSolkaDomainsServicesItem3 extends Migration
{
    public function up()
    {
        Schema::table('solka_domains_services_item', function($table)
        {
            $table->dropColumn('photo');
        });
    }
    
    public function down()
    {
        Schema::table('solka_domains_services_item', function($table)
        {
            $table->string('photo', 191);
        });
    }
}
