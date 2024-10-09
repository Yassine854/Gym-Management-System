<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MemberRequest extends FormRequest
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
            'fname'=>['bail','required','string'],
            'lname'=>['bail','required','string'],
            'gender'=>['bail','required','string'],
            'address'=>['bail','required','string'],
            'birth'=>['bail','required','date'],
            'tel'=>['bail','required','unique:members','unique:coaches','integer'],
            'email'=>['bail','required','unique:members','unique:users','unique:coaches','string'],
            'password'=>['bail','required','string'],

        ];
    }
}
