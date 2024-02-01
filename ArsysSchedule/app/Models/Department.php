<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'department'; // Ubah ke nama tabel yang benar

    protected $primaryKey = 'uniqueid';

    public $timestamps = false;

    protected $fillable = [
        'uniqueid', 'session_id', 'abbreviation', 'name', 'dept_code', 'external_uid', 'rs_color', 'external_manager',
        'external_mgr_label', 'external_mgr_abbv', 'solver_group_id', 'status_type', 'dist_priority', 'allow_req_time',
        'allow_req_room', 'last_modified_time', 'allow_req_dist', 'allow_events', 'instructor_pref', 'allow_student_schd',
        'external_funding_dept'
    ];

    protected $hidden = [
        // Tambahkan kolom yang ingin disembunyikan (jika ada)
    ];

    // Definisikan hubungan ke tabel-tabel terkait (jika ada)
    // public function solverGroup()
    // {
    //     return $this->belongsTo(SolverGroup::class, 'solver_group_id', 'uniqueid');
    // }

    // public function deptStatusType()
    // {
    //     return $this->belongsTo(DeptStatusType::class, 'status_type', 'uniqueid');
    // }

    // Tambahkan hubungan ke tabel lainnya sesuai kebutuhan
}
