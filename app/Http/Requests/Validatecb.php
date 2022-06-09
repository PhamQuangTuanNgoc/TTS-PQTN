<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Validatecb extends FormRequest
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
            'username' => 'required|unique:posts|max:255',
            'password' => 'required',
        ];
    }
    public function messages(){
        return[
            'username.required' => __('validation.username'),
            'password.required' => __('validation.password'),
        ];
    }
}
