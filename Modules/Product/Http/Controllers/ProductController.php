<?php

namespace Modules\Product\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Modules\Product\Entities\Product;

class ProductController extends Controller
{

    public function index()
    {
        $products = DB::table('products')->get();
        return response()->json($products);
    }

    public function create()
    {
        return view('product::create');
    }

    public function store(Product $product,Request $request)
    {
        $product->name=$request->name;
        $product->price=$request->price;
        $product->save();
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return response()->json($product);

    }

    public function update(Request $request, $id)
    {
        $product= Product::find($id);
        $product->name=$request->name;
        $product->price=$request->price;
        $product->save();
        return response()->json('Successfully');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return response()->json('Successfully');

    }
}
