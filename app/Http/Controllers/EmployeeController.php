<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function list() {
        $employee = DB::table('employees as e')
        ->join('offices as of', 'e.officeCode', '=', 'of.officeCode')
        ->join('customers as c', 'e.employeeNumber', '=', 'c.salesRepEmployeeNumber')
        ->join('payments as p', 'c.customerNumber', '=', 'p.customerNumber')
        ->join('orders as o', 'c.customerNumber', '=', 'o.customerNumber')
        ->get();
        return view('employees.viewEmployees', ['employees' => $employee]);
    }
}   
