<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Contracts\Buyable;
use Gloudemans\Shoppingcart\Facades\Cart;


class ContactController extends Controller
{
    public function contact()
    {
        return view(view:'front.news.contact');
    }
    public function index(){
        return view(view:'front.index');
    }
}
