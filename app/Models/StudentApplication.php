<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentApplication extends Model
{
    use HasFactory;

    protected $table = 'student_applications'; // Define the table name

    protected $fillable = [
        'date_of_birth',
        'address',
        'status',
        'program_id',
        'user_id',
        'nationality',
        'guardian_name',
        'guardian_contact',
        'interview_date',
        'interview_result',
        'submitted_documents',
        'secondary_school',
        'combination',
        'points_scored',
        'uace_year_of_completion'
    ];

    protected $casts = [
        // 'submitted_documents' => 'array', // JSON field
        'interview_date' => 'datetime',
    ];

    // Define Relationships
    public function program()
    {
        return $this->belongsTo(Program::class, 'program_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
