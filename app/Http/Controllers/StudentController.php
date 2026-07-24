<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\StudentsImport;
use App\Exports\StudentsExport;
use Maatwebsite\Excel\Facades\Excel;

class StudentController extends Controller
{
    public function index()
    {
        return view('students');
    }

    public function import(Request $request)
    {
        Excel::import(new StudentsImport, $request->file('file'));

        return back()->with('success', 'Students Imported Successfully!');
}

public function export()
{
    return Excel::download(new StudentsExport,'students.xlsx');
}
}
