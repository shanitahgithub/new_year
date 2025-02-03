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
    protected $fillable = [
        'name',
        'description',
        'semester',
        'course_unit_code',
        'status',
        'semester_id',
        'credit_unit',
        'created_by'
    ];

    // If you want to allow timestamps, make sure they are enabled (default is true)
    public $timestamps = true; // Optional, Laravel enables timestamps by default

    /**
     * Define the relationship between CourseUnit and Semester.
     * Assuming you have a Semester model and 'semester_id' is a foreign key
     */
    public function semester()
    {
        return $this->belongsTo(Semester::class);
        // return $this->belongsTo(Semester::class, 'semester_id');
    }
    

    /**
     * Define the relationship between CourseUnit and User (created_by).
     * Assuming you have a User model and 'created_by' is a foreign key referencing the User table
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
