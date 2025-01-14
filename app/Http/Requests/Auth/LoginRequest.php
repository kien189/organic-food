<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6|max:50',
            'remember' => 'nullable|boolean', // Lưu trạng thái đăng nhập (checkbox)
        ];
    }

    public function messages(): array
    {
        return [
            'email.required' => 'Email không được để trống.',
            'email.string' => 'Email phải là một chuỗi ký tự.',
            'email.email' => 'Vui lòng nhập một địa chỉ email hợp lệ.',
            'email.max' => 'Email không được vượt quá 255 ký tự.',

            'password.required' => 'Mật khẩu không được để trống.',
            'password.string' => 'Mật khẩu phải là một chuỗi ký tự.',
            'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự.',
            'password.max' => 'Mật khẩu không được vượt quá 50 ký tự.',

            'remember.boolean' => 'Giá trị của ô ghi nhớ phải đúng định dạng.',
        ];
    }
}
