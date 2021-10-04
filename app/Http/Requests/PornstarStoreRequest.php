<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PornstarStoreRequest extends FormRequest
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
            'firstname'=>'required|max:20',
            'dob'=>'required',
        ];
    }

    public function messages()
    {
       return [
           'firstname.required'=>'First Name must be provided',
           'dob.required'=>'Date of Birth must be provided',
        ];
    }
}
