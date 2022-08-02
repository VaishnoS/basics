<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->id('customer_id'); //Change primary key name
            $table->string('name', 60); // assign length
            $table->string('email', 60); // assign length
            $table->enum('gender', ["M", "F", "O"]);
            $table->text('address')->nullable(); // For default null
            $table->string('password');
            $table->boolean('status')->default(1); // For default 1
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
        Schema::dropIfExists('customer');
    }
}
