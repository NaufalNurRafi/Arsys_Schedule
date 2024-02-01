<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Student extends Model
{
    


    protected $table = 'student';
    protected $primaryKey = 'uniqueid';
    public $timestamps = false;

    // Define fillable fields if needed
    protected $fillable = [
      'uniqueid', 'external_uid', 'first_name', 'middle_name', 'last_name', 'email',
        'free_time_cat', 'schedule_preference', 'session_id', 'sect_status',
        'schedule_emailed', 'max_credit', 'req_credit', 'req_status',
        'req_extid', 'req_ts', 'min_credit', 'pin', 'pin_released',
        'req_intent', 'class_start', 'class_end',
    ];

    // Add relationships if needed
    // For example, if 'session_id' is a foreign key, you can define the relationship:
    // public function session()
    // {
    //     return $this->belongsTo(Session::class, 'session_id', 'uniqueid');
    // }



    

    // public function prodis()
    // {
    //     return $this->belongsTo(Prodi::class,'id_prodi','id');
    // }

    // public function kelas()
    // {
    //     return $this->belongsTo(Kelas::class,'id_kelas','id');
    // }

    // public function absen()
    // {
    //     return $this->hasMany(Absen::class,'id_mahasiswa');
    // }

    // public function nilai()
    // {
    //     return $this->hasMany(Nilai::class,'id_mahasiswa');
    // }
    
}
