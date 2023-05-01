<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommunionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('communions', function (Blueprint $table) {
             $table->id();
            // $table->tinyInteger('baptNo')->length(5)->unique();
            $table->string('parish');
            $table->string('signedBy');
            $table->string('minister');
            $table->date('commDate');
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
        Schema::dropIfExists('communions');
    }
}
