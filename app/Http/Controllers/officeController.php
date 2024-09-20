<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\Request;

class officeController extends Controller
{
    public function officeFunction(Request $request) {
        $office = DB::table('offices as o')
        ->join('employees as e', 'o.officeCode', '=', 'e.officeCode')
        ->select(
            'o.officeCode',
            'e.lastName',
            'e.firstName',
            'o.phone',
            'e.email',
            // Subquery to fetch the name of an employee for each office
            DB::raw("(SELECT CONCAT(emp.firstName, ' ', emp.lastName) 
                      FROM employees AS emp 
                      WHERE emp.employeeNumber = e.reportsTo 
                      LIMIT 1) AS reportsTo")
        )
        ->get();

        if ($request->ajax()) {
            return DataTables::of($office)
            ->make(true);
        }

        return view('office.viewOffice');
    }
}
