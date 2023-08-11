<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Contracts\Buyable;
use Gloudemans\Shoppingcart\Facades\Cart;


class CartController extends Controller
{
    public function cart($id)
    {
        return view(view:'front.shop.cart');
    }
    public function index(){
        return view(view:'front.index');
    }
}
