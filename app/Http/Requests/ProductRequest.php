<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'Name' => 'required|max:10',
            'Author' => 'required|max:25',
            'Description' => 'required|max:255'
        ];
    }

    public function messages()
    {
        return [
            'Name.required' => 'Name invalid',
            'Author.required' => 'Author invalid',
            'Description.required' => 'Description invalid'
        ];
    }
}