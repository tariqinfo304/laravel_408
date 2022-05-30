<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImages;

class WebController extends Controller
{
    function index()
    {
        //dd(session()->all());
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
    function shop_detail($id)
    {
        $product = Product::find($id);
        $images = ProductImages::where("product_id",$product->id)->get();
        return view("web.shop_detail",
                    [
                        "product" => $product,
                        "images" => $images
                    ]
            );
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
