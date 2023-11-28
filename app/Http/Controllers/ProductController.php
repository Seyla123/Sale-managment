<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;



class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
   
       $product = Product::with("category")->get();
       
       return view("product.index",compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // $product=DB::table('Product')->insert([
        //     'title' => $request->title,
        //     'cost' => $request->cost,
        //     'asset' => $request->asset,
        //     'description' => $request->description
        // ]);
        // if($product){
        //     return redirect('product');
        // }
        // else{
        //     return back();
        // }
        $data=$request->except(['_token']);
        if(Product::create($data)){
            return redirect('product')
            ->with('message', 'New Product was created successfully.');
            
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
    public function store()
    {
        $category = Category::get();
        $user =  Auth::user();
        return view('Product.create', compact('category','user'));
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
    public function edit($id)
    {
        $product=Product::with('category')->find($id);
        $category=Category::get();
        $user =  Auth::user();

        return view('product.edit', compact('product','category','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $product=DB::table('Product')->where('product_id', $id)->update([
        //     'title' => $request->title,
        //     'cost' => $request->cost,
        //     'asset' => $request->asset,
        //     'description' => $request->description
        // ]);
        $data=$request->except(['_token']);
        $product=Product::find($id)->update($data);
        if($product){
            return redirect('product');
        }
        else{
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=Product::find($id)->delete();
        if($product){
            return redirect('product');
        }
        else{
            return 'Error';
        }
    }
}
