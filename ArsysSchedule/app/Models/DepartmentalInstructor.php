<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DepartmentalInstructor extends Model
{
    protected $table = 'departmental_instructor'; // Change the table name

    protected $primaryKey = 'uniqueid';

    public $timestamps = false;

    protected $fillable = [
        'uniqueid', 'external_uid', 'career_acct', 'lname', 'fname', 'mname', 'pos_code_type', 'note', 'department_uniqueid',
        'ignore_too_far', 'last_modified_time', 'email', 'role_id', 'acad_title', 'teaching_pref_id', 'max_load', 'unavailable_days',
        'unavailable_offset'
    ];

    protected $hidden = [];

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_uniqueid', 'uniqueid');
    }

    public function positionType()
    {
        return $this->belongsTo(PositionType::class, 'pos_code_type', 'uniqueid');
    }

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id', 'role_id');
    }

    public function teachingPreference()
    {
        return $this->belongsTo(PreferenceLevel::class, 'teaching_pref_id', 'uniqueid');
    }
}
