<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slider', function (Blueprint $table) {
            $table->integer('id', true);
            $table->text('hash_id_city');
            $table->text('owner_address');
            $table->text('owner_phone');
            $table->text('owner_name');
            $table->text('slider_image_name');
            $table->text('hash_id_slider');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('slider');
    }
};
