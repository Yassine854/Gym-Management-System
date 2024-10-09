<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use  App\Modalproduct;
class ModalproductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $modalproducts=Modalproduct::all();
        return view('AdminTemp/products/index',compact('modalproducts'));
    }

    public function create()
    {
        $products=Product::all();
         return view('AdminTemp/products/modals/create',compact('products'));
    }



    public function store(Request $request)
    {
        $request->validate(['qte_pay'=>'required|min:0|max:qte','products_id'=>'required']);

        Modalproduct::create($request->all());

        return redirect()->route('products.index');
    }

}
