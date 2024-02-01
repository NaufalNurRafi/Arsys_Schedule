<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DepartmentRequest extends FormRequest
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
            'session_id' => 'required|integer',
            'abbreviation' => 'required|string|max:20',
            'name' => 'required|string|max:100',
            'dept_code' => 'required|string|max:50',
            'external_uid' => 'nullable|string|max:40',
            'rs_color' => 'nullable|string|max:6',
            'external_manager' => 'nullable|integer',
            'external_mgr_label' => 'nullable|string|max:30',
            'external_mgr_abbv' => 'nullable|string|max:10',
            'solver_group_id' => 'nullable|integer',
            'status_type' => 'nullable|integer',
            'dist_priority' => 'nullable|integer',
            'allow_req_time' => 'nullable|integer',
            'allow_req_room' => 'nullable|integer',
            'allow_req_dist' => 'nullable|integer',
            'allow_events' => 'nullable|integer',
            'instructor_pref' => 'nullable|integer',
            'allow_student_schd' => 'nullable|integer',
            'external_funding_dept' => 'nullable|integer',
        ];
    }
}
