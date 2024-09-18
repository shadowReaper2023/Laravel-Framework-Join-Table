<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\Request;
use Carbon\Carbon;

class OrderController extends Controller
{
    public function orderFunction(Request $request) {
        $order = DB::table('orders as o')
        ->join('orderdetails as od', 'o.orderNumber', '=', 'od.orderNumber')
        ->join('products as p', 'od.productCode', '=', 'p.productCode')
        ->join('productlines as pl', 'p.productLine', '=', 'pl.productLine')
        ->join('customers as c', 'o.customerNumber', '=', 'c.customerNumber')
        ->join('payments as pm', 'c.customerNumber', '=', 'pm.customerNumber')
        ->join('employees as e', 'c.salesRepEmployeeNumber', '=', 'e.employeeNumber')
        ->join('offices as of', 'e.officeCode', '=', 'of.officeCode')
        ->select(
            'od.priceEach',
            'od.orderNumber',
            'pm.checkNumber',
            'o.orderDate',
            'o.requiredDate',
            'o.shippedDate',
            'p.quantityInStock',
            'c.customerNumber',
        )
        ->get();
        if ($request->ajax()) {
            return DataTables::of($order)
                ->editColumn('orderDate', function ($row) {
                    return Carbon::parse($row->orderDate)->format('M j, Y');
                })
                ->editColumn('shippedDate', function ($row) {
                    return Carbon::parse($row->shippedDate)->format('M j, Y');
                })
                ->editColumn('requiredDate', function ($row) {
                    return Carbon::parse($row->requiredDate)->format('M j, Y');
                })
                ->make(true);
        }

        return view('order.viewOrder');
    }
}
