<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Semester;
use Illuminate\Validation\Rule; 
class UpdateSemesterRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    // public function rules()
    // {
    //     $rules = Semester::$rules;
        
    //     return $rules;
    // }

    public function rules()
{
    $id = $this->route('semester'); // Get the semester ID from the route

    return [
        'name' => [
            'required',
            'min:3',
            'max:100',
            Rule::unique('semesters', 'name')->ignore($id) // Ignore current record
        ],
        'status' => 'required|string',
        'start_date' => 'nullable|date',
        'end_date' => 'required|date',
        'created_by' => 'nullable|integer',
        'program' => 'required|string'
    ];
}
}
