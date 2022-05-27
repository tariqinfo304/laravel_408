<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImages;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$listing  = Product::paginate(3);
       $listing  = Product::simplePaginate(3);
      //  $listing  = Product::cursorPaginate(3);


     //dd($listing);

        return view("web.product.listing")->with("list", $listing );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        return view("web.product.add_edit")
                        ->with("title","Add Product");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        //echo $request->name;
        //echo $request->input("name");

        $request->validate([
            "name" => "required|min:5",
            "price" => "required|integer",
            "qty"   => "required|integer",
            "description" => "required|min:5",
            "display_image" => "required|File"
        ]);



        $p = new Product();

        if($request->has("display_image"))
        {
            $path = $request->display_image->store("upload");
            $p->display_image = $path;
        }


        $p->name = $request->name;
        $p->price = $request->price;
        $p->qty = $request->qty;
        $p->description = $request->description;
        
        $p->save();

        
        if($request->has("product_images"))
        {
            foreach($request->product_images as $file)
            {
                $image = new ProductImages();
                $image->product_id  = $p->id;
                $image->image = $file->store("upload");
                $image->save();
            }
        }

        return redirect("product");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $obj = NULL;

        if(!empty($id))
        {
            $obj = Product::find($id);
        }
        return view("web.product.preview")
                        ->with("title","Delete Product")
                        ->with("id",$id)
                        ->with("obj",$obj);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obj = NULL;

        if(!empty($id))
        {
            $obj = Product::find($id);
        }
        return view("web.product.add_edit")
                        ->with("title","Edit Product")
                        ->with("id",$id)
                        ->with("obj",$obj);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $request->validate([
            "name" => "required|min:5",
            "price" => "required|integer",
            "qty"   => "required|integer",
            "description" => "required|min:5"
        ]);

        $obj = Product::find($id);
        $obj->name = $request->name ?? $obj->name;
        $obj->price = $request->price ?? $obj->price;
        $obj->qty = $request->qty ?? $obj->qty;
        $obj->description = $request->description ?? $obj->description;

        $obj->save();

         return redirect("product");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!empty($id))
        {
            $obj = Product::find($id);
            $obj->delete();

            return redirect("product");

        }
    }
}
