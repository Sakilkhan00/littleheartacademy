<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteSeoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_seo', function (Blueprint $table) {
            $table->id();
            $table->longText('site_title')->nullable();
            $table->longText('site_meta_keywords')->nullable();
            $table->longText('site_meta_description')->nullable();
            $table->longText('other_scripts')->nullable();
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
        Schema::dropIfExists('site_seo');
    }
}
