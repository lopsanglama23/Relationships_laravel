<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:50',
            'roll_no' => 'required|alpha_num|max:20|unique:students,roll_no',
            'batch' => 'required|integer|min:2000|max:' . date('Y'),
            'semester' => 'required|integer|min:1|max:10',
            'college' => 'required|string|max:50',
        ];
    }
}
