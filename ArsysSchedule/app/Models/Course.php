<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Contoh model Eloquent Course
class Course extends Model
{
    protected $fillable = ['course', 'itype', 'section', 'suffix', 'date_pattern', 'day', 'start_time', 'end_time', 'room', 'instructor'];
}


