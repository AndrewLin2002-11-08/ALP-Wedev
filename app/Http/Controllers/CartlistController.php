<?php

namespace App\Http\Controllers;

use App\Models\Cartlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CartlistController extends Controller
{
    //


    public function index(Request $Request)
    {
        //$prices = collect(Cartlist::all())
        //->where('email', auth()->user()->email)
        //->where('status', 'Open')
        //->sum('price');
        //dd($prices);

        //return Cartlist::where('email', auth()->user()->email)->get();
        $data = collect(Cartlist::all())
            ->where('email', auth()->user()->email)
            ->where('status', 'Open');

        $qtytotal = collect(Cartlist::all())
            ->where('email', auth()->user()->email)
            ->where('
            status', 'Open')
            ->sum('qty');

        $subtotal = collect(Cartlist::all())
            ->where('email', auth()->user()->email)
            ->where('status', 'Open')
            ->sum('jlh');

        return view('cartlist', [
            //"cartlist" => cartlist::all()
            "cartlists" => $data,
            "qtytotal" => $qtytotal,
            "grandtotal" => $subtotal


        ]);

        // dd()
    }

    public function store(Request $Request)
    {
        $validatedData = $Request->validate([
            'email' => 'max:255',
            'product_id' => 'max:255',
            'name' => 'max:255',
            'price' => 'max:255',
            'qty' => 'numeric',
            'status' => 'max:255'
        ]);

        //dd('reg berhasil');
        //return request()->all();
        //return $validatedData;
        $validatedData['jlh'] = $validatedData['price'] * $validatedData['qty'];

        Cartlist::create($validatedData);
        return redirect('/cartlist');

    }

    public function destroy(Request $Request)
    {
        //$validatedData = $Request->validate([
        //  'id' => 'max:255'
        //]);

        //dd('reg berhasil');
        //return request()->all();
        //return $validatedData;

        Cartlist::destroy($Request->id);
        return redirect('/cartlist');

    }


    public function carttocart(Request $Request)
    {

        $validatedData = $Request->validate([
            'email' => 'max:255',
            'product_id' => 'max:255',
            'name' => 'max:255',
            'price' => 'max:255',
            'status' => 'max:255'
        ]);

        $validatedData['status'] = 'Close';
        Cartlist::where('email', auth()->user()->email)
            ->update($validatedData);
        return redirect('/sucesss');

    }


}
