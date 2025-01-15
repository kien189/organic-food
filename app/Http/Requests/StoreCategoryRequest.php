<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
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
            'name' => 'required|unique:categories,name',
            'image' => 'required',
            'slug' => 'required|unique:categories,slug',
        ];
    }


    public function messages():array{
        return [
            'name.required' => 'Tên danh mục không được để trống.',
            'name.unique' => 'Tên danh mục đã tồn tại.',
            'image.required' => 'Ảnh danh mục không được để trống.',
            'image.image' => 'Ảnh danh mục phải là hình ảnh.',
            'slug.required' => 'Slug danh mục không được để trống.',
            'slug.unique' => 'Slug danh mục đã tồn tại.',
        ];
    }
}
