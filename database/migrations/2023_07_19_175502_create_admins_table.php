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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('admin_id');
            $table->string('name');
            $table->string('password');
            $table->string('email');
            $table->tinyInteger('gender')->comment('1:Male,2:Fe-male');
            $table->tinyInteger('status')->comment('1:Active,2:Terminate');
            $table->tinyInteger('emp_type')->comment('1:base,2:Mid,3:Master');
            $table->date('joining_date');
            $table->string('last_logged_in_ip')->nullable();
            $table->dateTime('last_logged_in_at')->nullable();
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
        Schema::dropIfExists('admins');
    }
};
