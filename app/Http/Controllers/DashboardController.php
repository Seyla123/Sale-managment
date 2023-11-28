<?php

namespace App\Http\Controllers;
use App\Models\Sale;
use App\Models\User;
use App\Models\Product;
use App\Models\purchase;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
         $sale1=Sale::select(Sale::raw('SUM(TotalPrice) as Total'))
        ->get();
         $user1=User::select(User::raw('count(id) as Total'))
        ->get();
         $purchase1=Purchase::select(Purchase::raw('SUM(TotalPrice) as Total'))
        ->get();
         $product1=Product::select(Product::raw('COUNT(ProductID) as Total'))
        ->get();
        $user =  User::get();
        $purchase = Purchase::with('product','user','supplier')->limit(4)->get();
        $sale = Sale::with('product','user')->limit(4)->get();
        return view('dashboard', compact('sale1','user1','purchase1','product1','user','purchase','sale'));
    }
}
