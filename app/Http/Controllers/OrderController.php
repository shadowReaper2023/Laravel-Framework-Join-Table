<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function orderFunction() {
        $order = DB::table('orders as o')
        ->join('orderdetails as od', 'o.orderNumber', '=', 'od.orderNumber')
        ->join('products as p', 'od.productCode', '=', 'p.productCode')
        ->join('productlines as pl', 'p.productLine', '=', 'pl.productLine')
        ->join('customers as c', 'o.customerNumber', '=', 'c.customerNumber')
        ->join('payments as pm', 'c.customerNumber', '=', 'pm.customerNumber')
        ->join('employees as e', 'c.salesRepEmployeeNumber', '=', 'e.employeeNumber')
        ->join('offices as of', 'e.officeCode', '=', 'of.officeCode')
        ->get();
        return view('order.viewOrder', ['orders' => $order]);
    }
}
