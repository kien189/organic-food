<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required|string|max:50',
            'email' => 'required|string|email|unique:users,email',
            'phone'=>'required|regex:/^0[0-9]{9}$/|numeric|unique:users,phone',
            'password' => 'required|regex:/^(?=.*[A-Z])(?=.*[\W]).+$/|confirmed|min:6',//ít nhất 1 chữ hoa và 1 ký tự đặc biệt
            'password_confirmation' => 'required'
        ];
    }


    public function messages(): array
    {
        return [
            'name.required' => 'Tên người dùng không được bỏ trống.',
            'name.max'=> 'Tên người dùng không được quá 50 kí tự.',
            'phone.required'=>'Số điện thoại không được để trống.',
            'phone.regex'=>'Số điện thoại không hợp lệ.',
            'phone.numeric'=>'Số điện thoại phải là số.',
            'phone.max'=>'Số điện thoại không được quá 10 số.',
            'email.required'=>'Email không được để trống.',
            'email.email'=>'Email không hợp lệ.',
            'password.required'=>'Mật khẩu không được để trống.',
            'password.regex'=>'Mật khẩu phải có 1 chữ in hoa , 1 ký tự đặc biệt .',
            'password.confirmed' => 'Mật khẩu xác nhận không khớp.',
            'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự.',
            'password_confirmation.required'=>'Xác nhận mật khẩu không được để trống .'
        ];
    }
}
