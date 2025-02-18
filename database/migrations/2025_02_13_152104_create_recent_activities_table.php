<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecentActivitiesTable extends Migration
{
    public function up()
    {
        Schema::create('recent_activities', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Activity title
            $table->text('description')->nullable(); // Optional description
            $table->timestamps(); // Created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('recent_activities');
    }
}
