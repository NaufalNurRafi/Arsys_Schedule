<?php

namespace App\Imports;

use App\Models\Course;
use Maatwebsite\Excel\Concerns\ToModel;

class CourseImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Course([
            'course' => $row[0],
            'itype' => $row[1],
            'section' => $row[2],
            'suffix' => $row[3],
            'date_pattern' => $row[4],
            'day' => $row[5],
            'start_time' => $row[6],
            'end_time' => $row[7],
            'room' => $row[8],
            'instructor' => $row[9],
            
        ]);
        
    }
}
