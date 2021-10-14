<?php

namespace App\Imports;

use App\Models\Transcript;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class Excelimports implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Transcript([
            'name'=> $row['name'],
            'student_id'=> $row['student_id'],
            'subject_id'=> $row['subject_id'],
            'score'=> $row['score'],
        ]);
    }
}
