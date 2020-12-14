<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('paket');
            $table->bigInteger('harga');
            $table->string('img_path');
            $table->string('senin_lunch');
            $table->string('senin_dinner');
            $table->string('selasa_lunch');
            $table->string('selasa_dinner');
            $table->string('rabu_lunch');
            $table->string('rabu_dinner');
            $table->string('kamis_lunch');
            $table->string('kamis_dinner');
            $table->string('jumat_lunch');
            $table->string('jumat_dinner');
            $table->string('sabtu_lunch');
            $table->string('sabtu_dinner');
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
        Schema::dropIfExists('menus');
    }
}
