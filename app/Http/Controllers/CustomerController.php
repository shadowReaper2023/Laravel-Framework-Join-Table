<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customerFunction(Request $request) {
        $customers = DB::table('customers as c')
        ->join('payments as p', 'c.customerNumber', '=', 'p.customerNumber')
        ->join('employees as e', 'c.salesRepEmployeeNumber', '=', 'e.employeeNumber')
        ->join('offices as o', 'e.officeCode', '=', 'o.officeCode')
        ->select(
            'c.customerNumber',
            'c.customerName',
            'c.contactLastName',
            'c.contactFirstName',
            'p.checkNumber',
            'e.email',
            'o.country',
            DB::raw('CONCAT(e.firstName, " ", e.lastName) AS fullName')
        )
        ->get();

        if ($request->ajax()) {
            return DataTables::of($customers)
            ->make(true);
        }

        return view('customer.viewCustomer');
    }
}
