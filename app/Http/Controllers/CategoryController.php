<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::get();
        return view('category.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data=$request->except(['_token']);
        if(Category::create($data)){
            return redirect('category')
            ->with('message', 'New Category was created successfully.');
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
    public function store(Request $request)
    {
        $user =  Auth::user();
        return view('category.create', compact('user'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        $user =  Auth::user();
        return view('category.edit', compact('category','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $data=$request->except(['_token']);
        $product=Category::find($id)->update($data);
        if($product){
            return redirect('category');
        }
        else{
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category=Category::find($id)->delete();
        if($category){
            return redirect('category');
        }
        else{
            return 'Error';
        }
    }
}
