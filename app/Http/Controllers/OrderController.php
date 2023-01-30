<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Cart;
use Carbon\Carbon;

class OrderController extends Controller
{
    public function store(Request $req, $total){
        $orders = new Order;
        $orders->id = $req->fname . now()->toDateTimeString();
        $orders->firstname = $req->fname;
        $orders->lastname = $req->lname;
        $orders->city = $req->city;
        $orders->address = $req->address;
        $orders->phnumber = $req->phnumber;
        $orders->email = $req->email;
        $orders->total = $total;
        $orders->save();

        $id = $orders->id;
        
        Cart::truncate();

        return view('/ordersuccess')->with('id', $id);
    }

    public function show(){
        $orders= Order::all();
        $data =compact('orders');
        return view('adminorders')->with($data);
    }

    public function find(Request $req){
        $orders= Order::find($req->ID);
        $data =compact('orders');
        return view('displayorder')->with($data);
    }
}
