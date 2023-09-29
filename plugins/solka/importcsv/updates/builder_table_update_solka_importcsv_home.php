<?php namespace Solka\ImportCsv\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSolkaImportcsvHome extends Migration
{
    public function up()
    {
        Schema::rename('solka_importcsv_', 'solka_importcsv_home');
    }
    
    public function down()
    {
        Schema::rename('solka_importcsv_home', 'solka_importcsv_');
    }
}
