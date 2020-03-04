<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
    public function rules()
    {
        return [
        'login' => 'required|min:3|max:50',
        'password' => 'required|min:8|max:64',
        'email' => 'required',
        'last_name' => 'required|max:50',
        'first_name' => 'required|max:50'
        ];
    }
}
