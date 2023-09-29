<?php namespace Solka\Domains\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSolkaDomainsTags extends Migration
{
    public function up()
    {
        Schema::create('solka_domains_tags', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('solka_domains_tags');
    }
}
