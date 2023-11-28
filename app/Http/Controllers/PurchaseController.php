<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Supplier;
use App\Models\purchase;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::with("category")->get();
       
       return view("purchase.index",compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data=$request->except(['_token']);
        if(Purchase::create($data)){
            return redirect('purchase')
            ->with('message', 'New Purchase was created successfully.');
        }
        else{
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
        $supplier = Supplier::get();
        $user =  Auth::user();
        return view('purchase.create', compact('product','user','supplier'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user =  User::get();
        $purchase = Purchase::with('product','user','supplier')->get();
        return view('purchase.purchase', compact('purchase'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function edit(purchase $purchase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, purchase $purchase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function destroy(purchase $purchase)
    {
        //
    }
}
