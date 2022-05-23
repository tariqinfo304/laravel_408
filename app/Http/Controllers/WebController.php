<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class WebController extends Controller
{
    function index()
    {
        return view("web.home");
    }

    function shop()
    {

        $list = Product::all();
        return view("web.shop")->with("list",$list);
    }

     function cart()
    {
        return view("web.cart");
    }
     function shop_detail()
    {
        return view("web.shop_detail");
    }
     function checkout()
    {
        return view("web.checkout");
    }
     function contact()
    {
        return view("web.contact");
    }
     function product()
    {
        return view("web.product");
    }
}
