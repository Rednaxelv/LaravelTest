<?php

namespace App\Http\Requests\Employee;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $id = $this->route('employee');

        return [
            'dni' => [
                'required',
                'min:8',
                'max:30',
                Rule::unique('employees')->ignore($id) // Ignorar id del registro actual
            ],
            "first_name" => 'required|max:150',
            "last_name" => 'required|max:150',
        ];
    }
}
