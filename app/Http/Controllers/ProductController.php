<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
class ProductController extends Controller
{
    /*
     * get all product response
     */

    public function index()
    {
        $products= Product::all();
        return response()->json($products);
    }

    /*
    * get product by id
    */

    public function show($productId)
    {
        $product = Product::find($productId);
        return response()->json($product);
    }
    
}
