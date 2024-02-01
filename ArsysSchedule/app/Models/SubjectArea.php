<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubjectArea extends Model
{
    protected $table = 'subject_area';
    protected $primaryKey = 'uniqueid';
    public $timestamps = false;

    protected $fillable = [
        'uniqueid', 'session_id', 'subject_area_abbreviation', 'long_title', 'department_uniqueid',
        'external_uid', 'last_modified_time', 'funding_dept_id',
    ];

    protected $hidden = [];

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_uniqueid', 'uniqueid');
    }

    public function fundingDepartment()
    {
        return $this->belongsTo(Department::class, 'funding_dept_id', 'uniqueid');
    }

    // Add additional relationships or methods if needed
}
