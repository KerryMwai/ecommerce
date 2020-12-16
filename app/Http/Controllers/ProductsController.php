<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductsController extends Controller
{
    public function index()
    {
        $productdata=Product::all();
        return view('ecommerce.products',['products'=>$productdata]);

    }

    public function detail($id)
    {
       $datselected=Product::FindOrFail($id);
       return view('ecommerce.detail',['productdetails'=>$datselected]);
    }
}
