<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseUnit extends Model
{
    use HasFactory;

    // Specify the table name if it's not the default (optional)
    protected $table = 'course_units'; // Only if your table name is different from the plural form of the model

    // Allow mass assignment for the following fields
    protected $fillable = ['name', 'description','semester'];

    // If you want to allow timestamps, make sure they are enabled (default is true)
    public $timestamps = true; // Optional, Laravel enables timestamps by default
}
