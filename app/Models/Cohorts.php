<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Cohorts
 * @package App\Models
 * @version January 27, 2025, 7:02 pm UTC
 *
 * @property string $name
 * @property string $status
 * @property string $students
 * @property string $start_date
 * @property string $end_date
 */
class Cohorts extends Model
{

    use HasFactory;

    public $table = 'cohorts';
    



    public $fillable = [
        'name',
        'status',
        'students',
        'start_date',
        'end_date'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'status' => 'string',
        'students' => 'string',
        'start_date' => 'date',
        'end_date' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|min:5|max:150',
        'status' => 'required',
        'students' => 'required|string|min:5|max:150',
        'start_date' => 'required|date',
        'end_date' => 'nullable|date'
    ];

    
}
