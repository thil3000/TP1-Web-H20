<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFilmRequest extends FormRequest
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
        'title' => 'required|min:2|max:50',
        'release_year' => 'required|min:4|max:4',
        'length' => 'required|max:4',
        'description' => 'required|max:255',
        'rating' => 'required|max:5',
        'language_id' => 'required',
        'special_features' => 'required|max:200',
        'image' => 'required|max:40',
        ];

    }
}
