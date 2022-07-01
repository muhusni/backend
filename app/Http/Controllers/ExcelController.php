<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Imports\StudentsImport;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function excel(Request $request)
    {
        // return $request->excel;
        $validated = $request->validate([
            'excel' => 'mimes:xls,xlsx'
        ]);

        $import = Excel::import(new StudentsImport, $request->file('excel'));
        return response()->json(['message' => 'success'], 200);
    }
}
