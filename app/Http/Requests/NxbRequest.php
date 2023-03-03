<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NxbRequest extends FormRequest
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
            'Publishing_Company_Name'=> 'required|max:25',
        ];
    }
    public function messages()
    {
        return [
            // 'Publishing_Company_ID.required' => 'ID invalid',
            'Publishing_Company_Name.required' => 'Name invalid',
            // 'Publishing_Company_ID.unique' => 'ID already existed'
        ];
    }
}
