<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Catering extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catering', function (Blueprint $table) {
            $table->id();
            $table->string('package_name');
            $table->integer('price');
            $table->integer('mrp');
            $table->longtext("short_des");
            $table->longtext("privacy_policy");
            $table->string("image");
            $table->integer("provider_id");
            $table->integer("status");
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
        Schema::dropIfExists('catering');
    }
}
