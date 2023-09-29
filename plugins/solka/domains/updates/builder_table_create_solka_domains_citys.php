<?php namespace Solka\Domains\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSolkaDomainsCitys extends Migration
{
    public function up()
    {
        Schema::create('solka_domains_citys', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('city');
            $table->string('domain');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('solka_domains_citys');
    }
}
