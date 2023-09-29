<?php namespace Solka\Import\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSolkaImport extends Migration
{
    public function up()
    {
        Schema::create('solka_import_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('price');
            $table->text('title');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('solka_import_');
    }
}
