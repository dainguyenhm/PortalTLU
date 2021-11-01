<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Transcript;
use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;


class TranscriptController extends Controller
{
    public function list()
    {
        return view('index_Chuan.admin.transcript.list');
    }

    public function getcreate()
    {
        $student = Student::all();
        $subject = Subject::all();
        return view('index_Chuan.admin.transcript.insert', ['student' => $student, 'subject' => $subject]);
    }

    public function import_csv(Request $request)
    {
        try {
            $reader = ReaderEntityFactory::createXLSXReader();
            $path_file = $request->pathfile;
            $reader->open($path_file);

            foreach ($reader->getSheetIterator() as $k => $sheet) {
                $this->importSubject($sheet);
                $this->importTranscript($sheet);
            }
            return redirect()->back()->with('success', 'Successfully');
        } catch (Throwable $th) {
            //throw $th;
        }
    }

    function importSubject($data)
    {
        foreach ($data->getRowIterator() as $rowIndex => $row) {
            if ($rowIndex === 1) {
                continue;
            }
            $cell = $row->getCells();
            $this->createSubject(
                $cell[2]->getValue(),
                $cell[1]->getValue(),
                $cell[3]->getValue()
            );  
        }
    }

    function createSubject($name, $code, $credit)
    {
        $subject = Subject::where('subject_code', $code)->first();
        if(!$subject){
            Subject::createSubjectFromFile($name, $code, $credit);
        }
    }

    function importTranscript($data)
    {
        foreach ($data->getRowIterator() as $rowIndex => $row) {
            if ($rowIndex === 1) {
                continue;
            }
            $cell = $row->getCells();
            $this->createTranscript(
                $cell[0]->getValue(),
                $cell[1]->getValue(),
                $cell[3]->getValue()
            );  
        }
        return redirect()->route('transcript.list')->with('Thongbao', 'Thêm Bảng điểm thành công.');
    }

    function createTranscript($studentCode, $subjectCode, $score)
    {
        $student = Student::where('student_code', $studentCode)->first();
        $subject = Subject::where('subject_code', $subjectCode)->first();
        if( $student && $subject){
            $checkExist = Transcript::where('student_id', $student->id)->where('subject_id', $subject->id)->first();
            if(!$checkExist){
                Transcript::createTranscriptFromFile($student->id, $subject->id, $score);
            }
        }
    }

    
}
