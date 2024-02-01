<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = 'staff';

    protected $primaryKey = 'uniqueid';

    public $timestamps = false;

    protected $fillable = [
        'uniqueid', 'external_uid', 'fname', 'mname', 'lname', 'pos_code', 'dept', 'pos_type', 'acad_title', 'campus'
    ];

    protected $hidden = [

    ];

    // public function fakultas()
    // {
    //     return $this->belongsTo(Fakultas::class,'id_fakultas','id');
    // }

    // public function kelas()
    // {
    //     return $this->hasMany(Kelas::class,'id_prodi');
    // }

    // public function prodi()
    // {
    // 	return $this->hasOne(Prodi::class, 'ka_prodi');
    // }

    // public function schedules()
    // {
    //     return $this->hasMany(Schedule::class,'id_dosen');
    // }
}
