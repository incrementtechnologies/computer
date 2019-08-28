<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComputersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branch_rates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('branch_id');
            $table->double('price', 8, 2);
            $table->string('setting')->default('hourly'); // per hour, per minute
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
        Schema::dropIfExists('branch_rates');
    }
}
