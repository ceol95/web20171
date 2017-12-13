<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AddProductsRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'sltCate' => 'required',
            'sltBrand' => 'required',
            'txtname'=>'required',
            'txtintro'=>'required',
            'txtimg'=>'required',
            'txtprice'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'sltBrand.required' => 'Hãy chọn một thương hiệu',
            'sltCate.required' => ' Hãy chọn một danh mục',
            'txtname.required' => ' Hãy nhập tên sản phẩm',
            'txtintro.required' => ' Hãy nhập tóm tắt chức năng cho sản phẩm',
            'txtimg.required' => ' Hãy nhập chọn một hình ảnh cho sản phẩm',
            'txtprice.required' => ' Hãy nhập giá cho sản phẩm'
            
        ];
    }
}
