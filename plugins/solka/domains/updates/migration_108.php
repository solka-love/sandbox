<?php namespace Solka\Domains\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class Migration108 extends Migration
{
    public function up()
    {
        Schema::create('solka_item_city', function($table)
        {    
            $table->integer('item_id')->unsigned();
            $table->integer('city_id')->unsigned();
            $table->primary(['item_id','city_id']);
            
        
        
        });
    }

    public function down()
    {
        Schema::drop('solka_item_city');
    }
}