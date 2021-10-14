<?php

namespace App\Imports;

use App\Models\ImportSubjectModel;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportSubject implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ImportSubject([
            'subject_code'=> $row[0],
            'name'=> $row[1],
            'credit'=> $row[2],
            'student_code'=> $row[3],
            'score'=> $row[4],
        ]);
    }
}
