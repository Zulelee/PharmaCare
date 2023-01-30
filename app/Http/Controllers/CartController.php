<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    public function store($id){
        $carts = new Cart;
        $carts->medicine_id = $id;
        $carts->qty= 1;
        $carts->save();

        return redirect('medicine')->with('message', 'Item Added To Cart Successfully!');
    }

    public function show(){
        $carts= Cart::join('medicines', 'carts.medicine_id', '=', 'medicines.medicine_id')->get();
        $data =compact('carts');
        return view('Cart')->with($data);
    }

    public function destroy($id)
    {
        Cart::where('id','=',$id)->delete();
        return redirect()->back();
    }

    public function proceedorder($total){
        return view('placeorder')->with('total', $total);
    }

}
