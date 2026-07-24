<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\StudentsImport;
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
}
