<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseOffering extends Model
{
    protected $table = 'course_offering';
    protected $primaryKey = 'uniqueid';
    public $timestamps = false;

    protected $fillable = [
        'uniqueid', 'course_nbr', 'is_control', 'perm_id', 'proj_demand', 'instr_offr_id', 'subject_area_id', 'title',
        'schedule_book_note', 'demand_offering_id', 'demand_offering_type', 'nbr_expected_stdents', 'external_uid',
        'last_modified_time', 'uid_rolled_fwd_from', 'lastlike_demand', 'enrollment', 'reservation', 'course_type_id',
        'consent_type', 'alternative_offering_id', 'snapshot_proj_demand', 'snapshot_prj_dmd_date', 'funding_dept_id',
    ];

    protected $hidden = [];

    public function departmentalInstructor()
    {
        return $this->belongsTo(DepartmentalInstructor::class, 'instr_offr_id', 'uniqueid');
    }

    // Add additional relationships if needed
}
