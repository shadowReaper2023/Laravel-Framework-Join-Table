<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productFunction() {
        $products = DB::table('products as p')
        ->join('orderdetails as od', 'p.productCode', '=', 'od.productCode')
        ->join('productlines as pl', 'p.productLine', '=', 'pl.productLine')
        ->get();
        return view('product.viewProducts', ['products' => $products]);
    }
}   
