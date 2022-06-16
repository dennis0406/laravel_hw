<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class roomValidateRequest extends FormRequest
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
            'name'=> 'required|max:100',
            'desc'=>'required|min:6|max:300',
            'price'=>'required|numeric',
            'image'=>'required|filled',
        ];
    }
    public function messages()
    {
        return [
            'name.required'=> 'Enter name',
            'name.max'=> 'There are too much words',
            'desc.required'=> 'Enter describe',
            'price.required'=> 'Enter price',
            'image.required'=> 'Enter price',
        ];
    }
}
