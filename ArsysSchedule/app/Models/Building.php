<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    protected $table = 'building';
    protected $primaryKey = 'uniqueid';
    public $timestamps = false;

    // Define fillable fields if needed
    protected $fillable = [
        'uniqueid', 'session_id', 'abbreviation', 'name', 'coordinate_x', 'coordinate_y', 'external_uid',
    ];

    // Add relationships if needed
    // For example, if 'session_id' is a foreign key, you can define the relationship:
    // public function session()
    // {
    //     return $this->belongsTo(Session::class, 'session_id', 'uniqueid');
    // }

    // Add other relationships if required
}
