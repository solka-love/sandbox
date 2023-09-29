<?php namespace Solka\ImportCsv\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSolkaImportcsvHome2 extends Migration
{
    public function up()
    {
        Schema::table('solka_importcsv_home', function($table)
        {
            $table->integer('before_square');
            $table->renameColumn('id_square', 'from_square');
        });
    }
    
    public function down()
    {
        Schema::table('solka_importcsv_home', function($table)
        {
            $table->dropColumn('before_square');
            $table->renameColumn('from_square', 'id_square');
        });
    }
}
