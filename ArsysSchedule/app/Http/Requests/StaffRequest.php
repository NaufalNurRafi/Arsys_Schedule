<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StaffRequest extends FormRequest
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
            'external_uid' => 'required|integer',
            'fname' => 'required',
            'mname' => 'nullable',
            'lname' => 'nullable',
            'pos_code' => 'required|integer',
            'dept' => 'required|integer',
            'pos_type' => 'nullable',
            'acad_title' => 'nullable',
            'campus' => 'nullable',
        ];
    }
}
