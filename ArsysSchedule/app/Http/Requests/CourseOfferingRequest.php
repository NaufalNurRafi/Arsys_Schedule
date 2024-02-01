<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseOfferingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Ganti dengan true jika tidak menggunakan fitur otorisasi
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'uniqueid' => 'required|integer',
            'course_nbr' => 'required',
            'is_control' => 'integer',
            'perm_id' => 'nullable',
            'proj_demand' => 'integer',
            'instr_offr_id' => 'integer',
            'subject_area_id' => 'integer',
            'title' => 'nullable',
            'schedule_book_note' => 'nullable',
            'demand_offering_id' => 'integer',
            'demand_offering_type' => 'integer',
            'nbr_expected_stdents' => 'integer',
            'external_uid' => 'required|integer',
            'last_modified_time' => 'nullable',
            'uid_rolled_fwd_from' => 'integer',
            'lastlike_demand' => 'integer',
            'enrollment' => 'integer',
            'reservation' => 'integer',
            'course_type_id' => 'integer',
            'consent_type' => 'integer',
            'alternative_offering_id' => 'integer',
            'snapshot_proj_demand' => 'integer',
            'snapshot_prj_dmd_date' => 'nullable|date',
            'funding_dept_id' => 'integer',
        ];
    }
}
