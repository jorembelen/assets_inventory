<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('emp_id')->nullable();
            $table->string('ritcco')->nullable();
            $table->string('type');
            $table->string('description');
            $table->string('serial_number');
            $table->string('mobile_number')->nullable();
            $table->string('asset_number')->nullable();
            $table->date('date_purchased')->nullable();
            $table->boolean('status')->default(0);
            $table->string('remarks')->nullable();
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
        Schema::dropIfExists('assets');
    }
}
