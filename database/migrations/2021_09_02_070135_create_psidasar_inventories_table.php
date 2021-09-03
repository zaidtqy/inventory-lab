<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePsidasarInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('psidasar_inventories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('brand');
            $table->string('name');
            $table->string('category');
            $table->integer('quantity');
            $table->string('description');

            $table->softDeletes();
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
        Schema::dropIfExists('psidasar_inventories');
    }
}
