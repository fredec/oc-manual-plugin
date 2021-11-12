<?php namespace Diveramkt\Manual\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDiveramktManualVideos extends Migration
{
    public function up()
    {
        Schema::table('diveramkt_manual_videos', function($table)
        {
            $table->string('title', 255)->nullable()->change();
            $table->string('description', 255)->nullable()->change();
            $table->string('cod_embed', 255)->nullable()->change();
            $table->integer('sort_order')->nullable()->default(0)->change();
        });
    }
    
    public function down()
    {
        Schema::table('diveramkt_manual_videos', function($table)
        {
            $table->string('title', 255)->nullable(false)->change();
            $table->string('description', 255)->nullable(false)->change();
            $table->string('cod_embed', 255)->nullable(false)->change();
            $table->integer('sort_order')->nullable(false)->default(null)->change();
        });
    }
}
