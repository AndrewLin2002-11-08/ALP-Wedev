<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class cart_add extends Controller
{
    public function add_to_cart(Request $request)
    {
        dd($request->all());
        // if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        //     $item_id = $_GET['id'];
        //     $user_id = $_SESSION['user_id'];
        //     $query = "INSERT INTO users_products(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
        //     mysqli_query($con, $query) or die(mysqli_error($con));
        //     header('location: products.php');
        // }


    // public function fetch_cart(){
    //     $cart = DB::table('cart')->where('item_id', 'gfwugfw')->all();
    //     return $cart;
    // }

    }
}
