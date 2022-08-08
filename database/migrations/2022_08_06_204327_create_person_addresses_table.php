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
        Schema::create('person_addresses', function (Blueprint $table) {
            $table->id();
            $table->integer('person_id')->unsigned();
            $table->string('street');
            $table->integer('house_number');
            $table->string('city');
            $table->string('zip_code');
            $table->enum('country', ['Germany', 'Belgium', 'Netherland']);
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
        Schema::dropIfExists('person_addresses');
    }
};
