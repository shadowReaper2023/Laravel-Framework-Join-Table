<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productFunction(Request $request) {
        $products = DB::table('products as p')
            ->join('orderdetails as od', 'p.productCode', '=', 'od.productCode')
            ->join('productlines as pl', 'p.productLine', '=', 'pl.productLine')
            ->select(
                'p.productCode',
                'p.productName',
                'pl.productLine',
                'p.productScale',
                'p.productVendor',
                'p.quantityInStock',
                'od.priceEach',
                'p.MSRP'
            );
    
        if ($request->ajax()) {
            return DataTables::of($products)
            ->make(true);
        }
    
        return view('product.viewProducts');
    }
    
}   
