<?php

namespace App\Http\Controllers;

use App\Models\sale;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $product = Product::with("category")->get();

        return view("sale.index", compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = $request->except(['_token']);
        if (Sale::create($data)) {
            return redirect('sale')
                ->with('message', 'New Sale was created successfully.');
        } else {
            return back();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
        $product = Product::with('category')->find($id);
        $user =  Auth::user();
        return view('sale.create', compact('product', 'user'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
    
         $sale = Sale::with('product','user')->get();
         return view('sale.sale', compact('sale'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function edit(sale $sale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sale $sale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function destroy(sale $sale)
    {
        //
    }
}
