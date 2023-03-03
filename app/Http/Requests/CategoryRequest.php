<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'Category_id'=> 'required|unique:categories|max:5',
            'Category_name'=> 'required|max:25',
        ];
    }
    public function messages()
    {
        return [
            'Category_id.required' => 'ID invalid',
            'Category_name.required' => 'Name invalid',
        ];
    }
}
