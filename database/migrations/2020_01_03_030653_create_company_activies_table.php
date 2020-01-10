<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyActiviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_activies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('author_id');
            $table->integer('company_category_id');
            $table->string('title');
            $table->string('slug');
            $table->text('description');
            $table->text('body');
            $table->string('image');
            $table->string('meta_description');
            $table->string('meta_keywords');
            $table->boolean('active')->default(0);
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
        Schema::dropIfExists('company_activies');
    }
}
