<?php namespace Diveramkt\Manual\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDiveramktManualPreview extends Migration
{
    public function up()
    {
        Schema::create('diveramkt_manual_preview', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('diveramkt_manual_preview');
    }
}
