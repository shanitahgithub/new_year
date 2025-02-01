<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSemesterRequest extends FormRequest
{
    public function authorize()
    {
        return true; // or add your authorization logic
    }

    public function rules()
    {
        return [
            // Your validation rules here
        ];
    }
}
