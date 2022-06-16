<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignupRequest extends FormRequest
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
            'email'=> 'required|max:255',
            'password'=>'required|min:6|max:12'
        ];
    }
    public function messages()
    {
        return [
            'password.required'=> 'Nhập pasword vào',
            'email.required'=> 'Nhập email vào',
            'password.min'=>'Mật khẩu ít rứa m! trên 6 nha',
            'password.max'=>'Mật khẩu phải ít hơn 12 ký tự nha bạn'
        ];
    }
}
