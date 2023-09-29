<?php namespace Solka\ImportCsv\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSolkaImportcsvMaterial extends Migration
{
    public function up()
    {
        Schema::create('solka_importcsv_material', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('solka_importcsv_material');
    }
}
