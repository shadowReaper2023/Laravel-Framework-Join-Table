<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function employeeFunction(Request $request) {
        $employee = DB::table('employees as e')
        ->join('offices as of', 'e.officeCode', '=', 'of.officeCode')
        ->join('customers as c', 'e.employeeNumber', '=', 'c.salesRepEmployeeNumber')
        ->join('payments as p', 'c.customerNumber', '=', 'p.customerNumber')
        ->join('orders as o', 'c.customerNumber', '=', 'o.customerNumber')
        ->select(
            'e.employeeNumber',
            'e.lastName',
            'e.firstName',
            'e.extension',
            'e.email',
            'of.addressLine1',
            'e.reportsTo',
            'e.jobTitle'
        )
        ->get();
        
        if ($request->ajax()) {
            return DataTables::of($employee)
            ->make(true);
        }
        return view('employees.viewEmployees');
    }
}   
