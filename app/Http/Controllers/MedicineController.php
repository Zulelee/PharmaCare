<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;

class MedicineController extends Controller
{
    public function index(){
        return view('addmedicine');
    }

    public function store(Request $request) //array {key:value}
    {
        $medicines= new Medicine;
        $medicines->name = $request->name;
        $medicines->manufacturer = $request->manufacturer;
        $medicines->quantity = $request->quantity;
        $medicines->Expiry_date = $request->doe;
        $medicines->price= $request->price;
        $medicines->save();
        
        return redirect('viewmedicines/show');
    }

    public function show()
    {
        $medicines= Medicine::all();
        $data =compact('medicines');
        return view('viewmedicines')->with($data);
    }

    public function edit($id)
    {
       $medicines= Medicine::where('medicine_id',$id)->first();
        $data =compact('medicines');
        return view('edit-medicine')->with($data);
    }

    public function update(Request $request, $id)
    {
        $medicines= Medicine::where('medicine_id',$id)->first();
        $medicines->name = $request->name;
        $medicines->manufacturer = $request->manufacturer;
        $medicines->quantity = $request->quantity;
        $medicines->Expiry_date = $request->doe;
        $medicines->price = $request->price;
        $medicines->update();
        
        return redirect('viewmedicines/show');
    }

    public function destroy($id)
    {
        Medicine::where('medicine_id','=',$id)->delete();
        return redirect()->back();
    }

    public function showmed(Request $req)
    {
        $medicines= Medicine::query()->where('medicines.name', 'like', "%{$req->name}%")->get();
        $alldata = compact('medicines');
        return view('displaymeds')->with($alldata);
    }
}
