<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentApplication extends Model
{
    use HasFactory;

    protected $table = 'student_applications'; // Define the table name

    protected $fillable = [
        'firstname',         // Added firstname
        'lastname',          // Added lastname
        'email',             // Added email
        'phone_number',      // Added phone_number
        'phone_number2',     // Added phone_number2
        'gender',            // Added gender
        'date_of_birth',
        'user_id',
        
        
        'address',
        'status',
        'program_id',
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
        'interview_date' => 'datetime',
    ];

    // Define Relationships

    
    public function program()
    {
        return $this->belongsTo(Program::class, 'program_id');
    }


    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }


//     public function student()
// {
//     return $this->hasOne(Student::class);
// }

public function student()
{
    return $this->hasOne(Student::class, 'student_application_id');
}



    
}
