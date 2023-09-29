<?php namespace Solka\Domains\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSolkaDomainsTitle extends Migration
{
    public function up()
    {
        Schema::create('solka_domains_title', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('sup_title');
            $table->text('title');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('solka_domains_title');
    }
}
