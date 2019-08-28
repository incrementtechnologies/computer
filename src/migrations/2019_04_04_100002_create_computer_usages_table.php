<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComputerUsagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('computer_usages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('computer_id');
            $table->bigInteger('account_id');
            $table->dateTime('start');
            $table->dateTime('end');
            $table->double('charge', 8, 2);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('computer_usages');
    }
}
