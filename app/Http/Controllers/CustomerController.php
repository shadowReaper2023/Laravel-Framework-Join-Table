<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customerFunction() {
        $customers = DB::table('customers as c')
        ->join('payments as p', 'c.customerNumber', '=', 'p.customerNumber')
        ->join('employees as e', 'c.salesRepEmployeeNumber', '=', 'e.employeeNumber')
        ->join('offices as o', 'e.officeCode', '=', 'o.officeCode')
        ->get();
        return view('customer.viewCustomer', ['customer' => $customers]);
    }
}
