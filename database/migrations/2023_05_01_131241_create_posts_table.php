<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            // $table->smallInteger('baptNo')->length(5)->unique();
            $table->string('baptName');
            $table->string('famName');
            $table->string('placeBapt');
            $table->date('baptDate');
            $table->string('dadName');
            $table->string('momName');
            $table->string('grandDad');
            $table->string('grandMom');
            $table->date('dateBirth');
            $table->string('placeBirth');
            $table->string('LGA');
            $table->string('signedBy');
            $table->string('minister');
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
        Schema::dropIfExists('posts');
    }
}
