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
            'SELECT e.fisrtName, e.lastName FROM employees AS  '
        )
        ->get();

        if ($request->ajax()) {
            return DataTables::of($office)
            ->make(true);
        }

        return view('office.viewOffice');
    }
}
