<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Contracts\Buyable;
use Gloudemans\Shoppingcart\Facades\Cart;


class PostController extends Controller
{
    public function post()
    {
        return view(view:'front.news.post');
    }
    public function index(){
        return view(view:'front.index');
    }
}
