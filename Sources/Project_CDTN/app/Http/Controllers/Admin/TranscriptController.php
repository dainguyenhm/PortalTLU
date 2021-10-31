<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Subject;
use App\Imports\Excelimports;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Transcript;
use Box\Spout\Reader\ReaderFactory;
use Box\Spout\Common\Type;
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
            dd($reader);
            $studentImports = array();
            dd($reader->getSheetIterator());
            return redirect()->back()->with('success', 'Successfully');
        } catch (Throwable $th) {
            //throw $th;
        }
    }

    
}
