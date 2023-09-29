<?php namespace Solka\Domains\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSolkaDomainsServicesItem extends Migration
{
    public function up()
    {
        Schema::create('solka_domains_services_item', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->text('discription');
            $table->text('short');
            $table->string('photo');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('solka_domains_services_item');
    }
}
