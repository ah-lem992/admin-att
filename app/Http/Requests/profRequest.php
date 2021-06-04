<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class profRequest extends FormRequest
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

            'nom'=> 'required|min:4',
            'grade'=> 'required|min:3',
           // 'courses_ids[]' => ['required', 'min:3'],
             'courses_ids[]' =>"sometimes|array",
            //
        ];
    }
}
