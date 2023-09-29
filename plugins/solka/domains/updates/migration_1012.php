<?php namespace Solka\Domains\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class Migration1012 extends Migration
{
    public function up()
    {
        Schema::create('solka_title_city', function($table)
        {    
            $table->integer('title_id')->unsigned();
            $table->integer('city_id')->unsigned();
            $table->primary(['title_id','city_id']);
            
        
        
        });
    }

    public function down()
    {
        Schema::drop('solka_title_city');
    }
}