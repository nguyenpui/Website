<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index()
    {
        //  $menProducts =  Product::where('feature', true)->where('product_category_id', 1)->get();
        //  $menProducts =  Product::where('feature', true)->where('product_category_id', 2)->get();


        return view(view:'front.index');
    }
    public function cart()
    {

        return view('front.shop.cart');
    }
    public function post()
    {

        return view('front.news.post');
    }
    public function contact()
    {

        return view('front.news.contact');
    }
    public function product()
    {

        return view('front.shop.show');
    }
    // public function addcart(Request $request, $id){
    //     if(Auth::id()){
    //         return redirect()->back();
    //     }
    //     else{
    //         return redirect('login');
    //     }
    // }
    public function login()
    {
        return view('front.auth.login');
    }
    public function register()
    {
        return view('front.auth.register');
    }
}
