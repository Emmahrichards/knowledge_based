<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('title'); // Field for the question title
            $table->text('body'); // Field for the question body
            $table->timestamps(); // `created_at` and `updated_at` fields
        });
    }

    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
