<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users',
            'roles' => 'required|array',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Ismni kiriting',
            'name.string' => 'Ismni rus yoki eng yuqori kiriting',
            'name.max' => 'Ismni 255 simvoldan kam bo\'lishi kerak',
            'email.required' => 'Emailni kiriting',
            'email.email' => 'Emailni to\'g\'ri kiriting',
            'email.max' => 'Emailni 255 simvoldan kam bo\'lishi kerak',
            'email.unique' => 'Email mavjud',
            'roles.required' => 'Rolni tanlang',
            'roles.array' => 'Rolni tanlang'
        ];
    }
}
