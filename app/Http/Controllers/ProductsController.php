<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Resources\Product as ProductResource;

class ProductsController extends Controller
{
    
    public function index()
    {
        $products = Product::paginate(40);
        
        return ProductResource::collection($products);
    }

   
    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
