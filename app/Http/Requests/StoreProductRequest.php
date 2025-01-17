<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'name' => 'required|string',
            'slug' => 'required|string|unique:products,slug',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|numeric|min:0',
            'sale_price' => 'nullable|numeric|min:0|lt:price',
            'description' => 'required|string',
            'short_description'=>'required|string',
            'quantity'=>'required|numeric|min:1',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'photos' => 'nullable|array',
            'photos.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ];
    }


    public function messages() : array
    {
        return [
            'name.required' => 'Tên sản phẩm không được để trống .',
            'name.string' => 'Tên sản phẩm phải là chuỗi',
            'slug.required' => 'Slug không được để trống',
            'slug.string' => 'Slug phải là chuỗi',
            'slug.unique' => 'Slug đã tồn tại',
            'category_id.required' => 'Chưa chọn danh mục',
            'category_id.exists' => 'Danh mục không tồn tại',
            'price.required' => 'Giá không được để trống',
            'price.numeric' => 'Giá phải là số',
            'price.min' => 'Giá phải lớn hơn hoặc bằng 0',
            'sale_price.required' => 'Giá khuyến mãi không được để trống',
            'sale_price.numeric' => 'Giá khuyến mãi phải là số',
            'sale_price.min' => 'Giá khuyến mãi phải lớn hơn hoặc bằng 0',
            'sale_price.lt' => 'Giá khuyến mãi phải nhỏ hơn giá gốc',
            'description.required' => 'Miêu tả không được để trống',
            'description.string' => 'Miêu tả phải là chuỗi',
            'short_description.required' => 'Mô tả ngắn không được để trống',
            'short_description.string' => 'Mô tả ngắn phải là chuỗi',
            'quantity.required' => 'Số lượng không được để trống',
            'quantity.numeric' => 'Số lượng phải là số',
            'quantity.min' => 'Số lượng phải lớn hơn hoặc bằng 1',
            'image.required' => 'Ảnh đại diện không được để trống',
            'image.image' => 'Ảnh đại diện phải là hình ảnh',
            'image.mimes' => 'Ảnh đại diện phải có định dạng jpeg,png,jpg,gif,svg',
            'image.max' => 'Ảnh đại diện phải có kích thước nhỏ hơn 2MB',
            'photos.*.image' => 'Hình ảnh phải là hình ảnh',
            'photos.*.mimes' => 'Hình ảnh phải có định dạng jpeg,png,jpg,gif,svg',
            'photos.*.max' => 'Hình ảnh phải có kích thước nhỏ hơn 2MB',

        ];
    }
}
