<?php namespace Solka\ImportCsv\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSolkaImportcsvHome3 extends Migration
{
    public function up()
    {
        Schema::table('solka_importcsv_home', function($table)
        {
            $table->text('city');
        });
    }
    
    public function down()
    {
        Schema::table('solka_importcsv_home', function($table)
        {
            $table->dropColumn('city');
        });
    }
}