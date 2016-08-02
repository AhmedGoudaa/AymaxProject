<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWidgetsAndTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('widgets_and_templates', function (Blueprint $table) {
            $table->integer('template_id')->unsigned();
            $table->integer('widget_id')->unsigned();
            $table->foreign('template_id')->references('template_id')->on('widget_templates');
            $table->foreign('widget_id')->references('widget_id')->on('widgets');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('widgets_and_templates');
    }
}
