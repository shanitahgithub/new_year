<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID, typically 'id'
            $table->string('course_name'); // Course name
            $table->string('programme_type'); // Programme type
            $table->string('duration'); // Duration should be string for regex validation
            $table->text('core_courses')->nullable(); // Core courses (nullable and text type for multi-line)
            $table->text('course_units')->nullable(); // Course units (nullable and text type for multi-line)
            $table->text('admission_requirements')->nullable(); // Admission requirements (nullable and text type for multi-line)
            $table->decimal('fees', 10, 2); // Fees should be decimal to handle currency values
            $table->string('category'); // Category of the programme
            $table->integer('credit_units'); // Credit units
            $table->timestamps(); // Created at and updated at timestamps
            $table->softDeletes(); // Soft delete functionality
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses'); // Drop the courses table if it exists
    }
}
