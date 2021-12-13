<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubmenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submenus', function (Blueprint $table) {
            $table->id();
            $table->string('nama_submenu')->nullable();
            $table->string('hak_akses')->nullable();
            $table->integer('urutan')->nullable();
            $table->string('url')->nullable();
            $table->boolean('new_class')->nullable();
            $table->string('icon')->nullable();
            $table->timestamps();
        });

        Schema::table('submenus', function (Blueprint $table) {
            $table->foreignId('menu_id')->constrained('menus')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('submenu');
    }
}
