<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLatestnewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('latestnews', function (Blueprint $table) {
            $table->id();
            $table->string("Pagename");
            $table->string("Title");
            $table->string("Thumbnail");
            $table->string("Description");
            $table->string("Content");
            $table->string("EventDate");
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
        Schema::dropIfExists('latestnews');
    }
}
