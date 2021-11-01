<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Subject;
use App\Imports\Excelimports;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Transcript;
use App\Models\User;
use Box\Spout\Reader\ReaderFactory;
use Box\Spout\Common\Type;
use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;
use Mockery\Matcher\Subset;

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

    public function import_student(Request $request)
    {
        try {
            $reader = ReaderEntityFactory::createXLSXReader();
            $path_file = $request->pathfile;
            $reader->open($path_file);

            foreach ($reader->getSheetIterator() as $k => $sheet) {
                $this->importStudent($sheet);
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
        
    }

    function importStudent($data)
    {
        foreach ($data->getRowIterator() as $rowIndex => $row) {
            if ($rowIndex === 1) {
                continue;
            }
            $cell = $row->getCells();

            $user = $this->createUser(
                $cell[0]->getValue(), 
                $cell[1]->getValue(), 
                $cell[2]->getValue(), 
                $cell[3]->getValue()
            );

            $this->createStudent(
                $user->id,
                $cell[0]->getValue(),
                $cell[6]->getValue(),
                $cell[4]->getValue(),
                $cell[5]->getValue(), 
            );  
        }
    }

    function createUser($code, $name, $birthDay, $sex)
    {
        $user = User::where('user_name', $code)->first();
        if(!$user){
            $user = User::createUserFromFile($code, $name, $birthDay, $sex);
        }
        return $user;
    }

    function createStudent($userId, $code, $session, $class, $faculityName)
    {
        $student = Student::where('student_code', $code)->get();
        if(!count($student)){
            Student::createStudentFromFile($userId, $code, $session, $class, $faculityName);
        }
    }

    
}
