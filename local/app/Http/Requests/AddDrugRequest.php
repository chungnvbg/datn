<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddDrugRequest extends FormRequest
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
            'name'=>'unique:drug,drug_name',
        ];
    }
    public function messages(){
        return[
            'name.unique'=>'Sản Phẩm đã tồn tại'
        ];
    }
}
