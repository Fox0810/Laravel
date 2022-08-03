<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getOne(Product $product){
        //$catalog=Catalog::find($id);
        return view('product', compact('product'));
    }
}
