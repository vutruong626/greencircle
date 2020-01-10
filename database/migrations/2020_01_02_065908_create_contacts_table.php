<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('phone');
            $table->string('address');
            $table->string('email');
            $table->text('skype')->nullable();
            $table->text('youtube')->nullable();
            $table->text('map')->nullable();
            $table->text('fanpage')->nullable();
            $table->text('zalo')->nullable();
            $table->text('google_plus')->nullable();
            $table->string('logo');
            $table->text('working_hours')->nullable();
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
        Schema::dropIfExists('contacts');
    }
}
