<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Models\Wishlist;
use App\Models\Cartlist;
use App\Models\Product;



class WishlistController extends Controller
{
    //

    public function index(Request $Request)
    {
        //return Wishlist::where('email', auth()->user()->email)->get();
        return view('wishlist', [
            //"wishlist" => Wishlist::all()
            "wishlists" => Wishlist::where('email', auth()->user()->email)->get()

            //$collection = collect(Wishlist::where('email', auth()->user()->email)->get())

            //$filtered = $collection->where('email', auth()->user()->email)->get())
            //  $collection = collect(Wishlist::where('email', auth()->user()->email))
            //$wishlists = $collection->where('email', auth()->user()->email)
            //return $collection->where('email', auth()->user()->email)

        ]);
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
        //dd($Request->all());
        if($Request['addlist'] === 'wishlist')
        {
            $datawish['email'] = $Request->email;
            $datawish['product_id'] = $Request->product_id;
            $datawish['name'] = $Request->name;
            $datawish['price'] = $Request->price;
            $datawish['qty'] = $Request->qty;
            $datawish['jlh'] = $Request->qty * $Request->price;
            Wishlist::create($datawish);
            return redirect('/wishlist');
        }
        else
        {
            $datacart['email'] = $Request->email;
            $datacart['product_id'] = $Request->product_id;
            $datacart['name'] = $Request->name;
            $datacart['price'] = $Request->price;
            $datacart['qty'] = $Request->qty;
            $datacart['jlh'] = $Request->qty * $Request->price;
            $datacart['status'] = "Open";
            Cartlist::create($datacart);
            return redirect('/cartlist');
        }

    }

    public function destroy(Request $Request)
    {
        //$validatedData = $Request->validate([
          //  'id' => 'max:255'
        //]);

        //dd('reg berhasil');
        //return request()->all();
        //return $validatedData;

        Wishlist::destroy($Request->id);
        return redirect('/wishlist');

    }

    public function wishtocart(Request $Request)
    {

        $datacart['email'] = $Request->email;
        $datacart['product_id'] = $Request->product_id;
        $datacart['name'] = $Request->name;
        $datacart['price'] = $Request->price;
        $datacart['qty'] = $Request->qty;
        $datacart['jlh'] = $Request->price * $Request->qty;
        $datacart['status'] = "Open";
        $data['id'] = $Request->id;

        Cartlist::create($datacart);
        Wishlist::destroy($data['id']);
        return redirect('/cartlist');
    }

}
