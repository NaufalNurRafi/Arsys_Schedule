<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'room';

    protected $primaryKey = 'uniqueid';

    public $timestamps = false;

    protected $fillable = [
        'uniqueid', 'external_uid', 'session_id', 'building_id', 'room_number', 'capacity',
        'coordinate_x', 'coordinate_y', 'ignore_too_far', 'manager_ids', 'pattern',
        'ignore_room_check', 'classification', 'display_name', 'exam_capacity',
        'permanent_id', 'room_type', 'event_dept_id', 'area', 'break_time',
        'event_status', 'note', 'availability', 'share_note', 'parent_room_id'
    ];

    protected $hidden = [

    ];

    public function building()
    {
        return $this->belongsTo(Building::class, 'building_id', 'uniqueid');
    }

    public function roomType()
    {
        return $this->belongsTo(RoomType::class, 'room_type', 'uniqueid');
    }

    public function eventDepartment()
    {
        return $this->belongsTo(Department::class, 'event_dept_id', 'uniqueid');
    }

    public function parentRoom()
    {
        return $this->belongsTo(Room::class, 'parent_room_id', 'uniqueid');
    }
}