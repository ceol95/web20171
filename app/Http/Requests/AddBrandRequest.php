<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AddBrandRequest extends Request
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
            'txtBrandName' => 'required|unique:Brands,name'
        ];
    }
    public function messages()
    {
        return [
            'txtBrandName.required' => ' Hãy nhập tên nhãn hiệu ',
            'txtBrandName.unique' => 'Tên này đã tồn tại '
            
        ];
    }
}
