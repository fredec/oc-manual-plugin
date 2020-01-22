<?php namespace Diveramkt\Manual\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDiveramktManualVideos extends Migration
{
    public function up()
    {
        Schema::create('diveramkt_manual_videos', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 255);
            $table->string('description', 255);
            $table->string('cod_embed', 255);
            $table->integer('sort_order');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('diveramkt_manual_videos');
    }
}
