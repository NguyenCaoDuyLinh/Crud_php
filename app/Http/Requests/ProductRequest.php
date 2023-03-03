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
            'Description' => 'required|max:255',
            'Price'=> 'required|max:25',
            'Quantity'=> 'integer|required|min:0',
            'Category_Id'=> 'required|max:25',
            'Publishing_Company_Id'=> 'required|max:25',
            'Date'=> 'required|max:25',
            'Avatar'=> 'required|image',
            'SKU'=> 'required|max:25', 
        ];
    }

    public function messages()
    {
        return [
            'Name.required' => 'Name invalid',
            'Author.required' => 'Author invalid',
            'Description.required' => 'Description invalid',
            'Price.required' => 'Price invalid',
            'Quantity.required' => 'Quantity invalid',
            'Category_Id.required' => 'Category_Id invalid',
            'Publishing_Company_Id.required' => 'Publishing_Company_Id invalid',
            'Date.required' => 'Date invalid',
            'Avatar.required' => 'Avatar invalid',
            'SKU.required' => 'SKU invalid',
        ];
    }
}
