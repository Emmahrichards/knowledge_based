<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCacheTable extends Migration
{
    public function up()
    {
        Schema::create('cache', function (Blueprint $table) {
            $table->string('key', 191)->primary(); // Adjust length to 191
            $table->mediumText('value');
            $table->integer('expiration');
        });
    }

    public function down()
    {
        Schema::dropIfExists('cache');
    }
}
