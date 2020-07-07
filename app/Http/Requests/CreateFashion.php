<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateFashion extends FormRequest
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
            'path' => 'required',
            'introduction' => 'max:2000',
            'sex' => 'required',
            'height' => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'path' => '画像',
            'introduction' => 'コーディネート紹介文',
            'sex' => '性別',
            'height' => '身長'
        ];
    }

    public function messages()
    {
        return [

        ];
    }
}
