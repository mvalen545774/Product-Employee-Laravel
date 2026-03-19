<?php

namespace App\Http\Controllers;
use App\Models\Employee;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    // DISPLAY ALL PRODUCTS
    public function index()
    {
        $employee = Employee::all();
        
        return view('employee.index', ["items" => $employee
        ]); //items reference employees and hold the data
    }

    public function store(Request $request)
    {
        Employee::create([
            'FirstName' => $request->input('firstName123'),
            'LastName' => $request->input('lastName123'),
            'Job' => $request->input('job123'),
            'Salary' => $request->input('salary123')
        ]);
        return redirect('/employees');
    }
}
