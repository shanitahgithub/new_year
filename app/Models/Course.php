<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Course
 * @package App\Models
 * @version September 19, 2024, 11:45 am UTC
 *
 * @property string $course_name
 * @property string $programme_type
 * @property integer $duration
 * @property string $core_courses
 * @property string $course_units
 * @property string $admission_requirements
 * @property integer $fees
 * @property string $category
 * @property integer $credit_units
 */
class Course extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'courses';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'course_name',
        'programme_type',
        'duration',
        'core_courses',
        'course_units',
        'admission_requirements',
        'fees',
        'category',
        'credit_units'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'course_name' => 'string',
        'programme_type' => 'string',
        'duration' => 'integer',
        'core_courses' => 'string',
        'course_units' => 'string',
        'admission_requirements' => 'string',
        'fees' => 'integer',
        'category' => 'string',
        'credit_units' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'course_name' => 'required|string|max:255',
        'programme_type' => 'required|string|max:100',
        'duration' => 'required|string|regex:/^\d+ (year|month)s?$/', // Correct regex for duration
        'core_courses' => 'nullable|string|max:255', // Add max length validation
        'course_units' => 'nullable|string|max:255',
        'admission_requirements' => 'required|string|max:255',
        'fees' => 'required|numeric|min:0',
        'category' => 'required|string|max:50',
        'credit_units' => 'required|numeric|max:50',
    ];
    
    
}
