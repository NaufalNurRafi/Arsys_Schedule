<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoomRequest extends FormRequest
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
            'external_uid' => 'nullable|string|max:40',
            'session_id' => 'nullable|integer',
            'building_id' => 'required|integer',
            'room_number' => 'required|string|max:40',
            'capacity' => 'nullable|integer',
            'coordinate_x' => 'nullable|numeric',
            'coordinate_y' => 'nullable|numeric',
            'ignore_too_far' => 'nullable|integer',
            'manager_ids' => 'nullable|string|max:3000',
            'pattern' => 'nullable|string|max:2048',
            'ignore_room_check' => 'nullable|integer',
            'classification' => 'nullable|string|max:20',
            'display_name' => 'nullable|string|max:100',
            'exam_capacity' => 'nullable|integer',
            'permanent_id' => 'required|integer',
            'room_type' => 'nullable|integer',
            'event_dept_id' => 'nullable|integer',
            'area' => 'nullable|numeric',
            'break_time' => 'nullable|integer',
            'event_status' => 'nullable|integer',
            'note' => 'nullable|string|max:2048',
            'availability' => 'nullable|string|max:2048',
            'share_note' => 'nullable|string|max:2048',
            'parent_room_id' => 'nullable|integer',
        ];
    }
}