<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CoachRequest extends FormRequest
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
            'cin'=>['bail','required','integer'],
            'fname'=>['bail','required','string'],
            'lname'=>['bail','required','string'],
            'gender'=>['bail','required','string'],
            'scontract'=>['bail','required','date'],
            'econtract'=>['bail','required','date','after:8/19/2021'],
            'sports_id'=>['bail','required','string'],
            

        ];
    }



}

