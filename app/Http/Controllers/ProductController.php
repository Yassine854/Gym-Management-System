<?php

namespace App\Http\Controllers;
use App\Product;
use  App\Modalproduct;
use App\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $products=Product::all();
        return view('AdminTemp/products/index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modalproducts=Modalproduct::all();
        return view('AdminTemp/products/create',compact('modalproducts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['name'=>'required','pay'=>'required','qte'=>'required','image'=>'required'],['name.required' => 'The name is required.','qte.required' => 'The quantity is required.','pay.required' => 'The price is required.','qte_pay.required' => 'The Quantity is required.','image.required' => 'The image is required.']);
        Product::create($request->all());

        $input=$request->all();
        if($request->hasFile('image'))
        {
           $destinationPath = 'images/clients/' ;
           $file = $request->file('image') ;
           $fileName = $file->getClientOriginalName() ;
           $file->move($destinationPath,$fileName);
           $path=$request->file('image')->storeAs($destinationPath,$fileName);
           $input['image']=$fileName;

        }

        return redirect()->route('products.index')->with('success','The product has been added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('AdminTemp/products/edit',compact('product'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
     {

        if ($request->input('selling')){
            $product->qte-=(int)$request->input('qte_pay');

            // DB::table('sales')->insert([
            //     [
            //     'name' =>$product->name,
            //     'cost' => ($product->pay)*($request->input('qte_pay')),

            //     ]
            // ]);
            // $sales=Sale::all();
            // foreach($sales as $sale)
            // {
            // if ($sale->name==$product->name)
            //     {
            //     $c=Sale::where('name', $product->name)->pluck('cost')->first();
            //     Sale::where('name', $product->name)->update(array('cost' =>$c+($product->pay)*($request->input('qte_pay'))));
            //     break;
            //     }
            // else

            // $soles=Sale::all();
            // $c=Sale::where('name', $product->name)->pluck('cost')->first();

            // if ($soles->isEmpty()){
            //     $sale=new Sale();
            //     $sale->name=$product->name;
            //     $sale->cost=($product->pay)*($request->input('qte_pay'));
            //     $sale->save();
            // }
            // else{
            //     DB::table('sales')->update([
            //     [
            //     'name' =>$product->name,
            //     'cost' => 0.82,

            //     ]
            //     ]);
            //     }
            // $sale = Sale::updateOrCreate(
            //     ['name' => $product->name],
            //     ['cost' =>($product->pay)*($request->input('qte_pay'))]
            // );

            $sales=Sale::all();
            $count=0;
            foreach($sales as $sale)
            {
                if($sale->name==$product->name)
                    $count++;
            }
            if($count==0){
                $sale=new Sale();
                $sale->name=$product->name;
                $sale->cost=($product->pay)*($request->input('qte_pay'));
                $sale->save();
            }

            else{
            DB::table('sales')
    ->where('name', $product->name)
    ->increment('cost', ($product->pay)*($request->input('qte_pay')));
            }

{



}


            $product->update();

        }
        else
            $request->validate(['name'=>'required','pay'=>'required','qte'=>'required','image'=>'required'],['name.required' => 'The name is required.','qte.required' => 'The quantity is required.','pay.required' => 'The price is required.','qte_pay.required' => 'The Quantity is required.','image.required' => 'The image is required.']);
            $product->update($request->all());

        return redirect()->route('products.index')->with('warning','The product has been updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}
