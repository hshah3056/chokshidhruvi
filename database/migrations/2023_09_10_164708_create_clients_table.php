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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('client_id');
            $table->string('contact_no');
            $table->string('address');
            $table->string('email');
            $table->integer('country_id');
            $table->integer('state_id');
            $table->integer('city');
            $table->text('concern');
            $table->enum('package',['1','3','6','12']);
            $table->tinyInteger('gender')->comment('1:Male,2:Fe-male');
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
        Schema::dropIfExists('clients');
    }
};
