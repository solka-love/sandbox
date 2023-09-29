<?php namespace Solka\ImportCsv\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSolkaImportcsv extends Migration
{
    public function up()
    {
        Schema::create('solka_importcsv_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('price');
            $table->integer('floor');
            $table->boolean('mansarda');
            $table->integer('id_material');
            $table->integer('id_square');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('solka_importcsv_');
    }
}
