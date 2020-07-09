<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use function GuzzleHttp\default_ca_bundle;

class PostRequest extends FormRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch($this->method()){
            case 'POST':
                 {
                    return [
                        'content' => 'required|string|min:1|max:5|space'
                    ];
                 }
            case 'PUT':
            case 'PATCH':
                {
                    return [
                        'content' => 'sometimes|required|string|min:1|max:5|space'
                    ];
                }
            case'DELETE':
            default:
        {
            return [];
        }
        }
    }
//    public function messages()
//    {
//        return [
//            'content.required' => 'つぶやき　は必ず入力してください。',
//            'content.min' => 'つぶやき　は1文字以上にしてください。',
//            'content.max' => 'つぶやき　は5文字以下にして下さい。'
//        ];
//    }
}
