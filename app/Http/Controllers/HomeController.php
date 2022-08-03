<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalog;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $catalogs = Catalog::whereNull('parent_id')->get();
        $products = Product::where('user_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        return view('home', compact('catalogs', 'products'));
    }
    public function postIndex(Request $request)
    {
        //dd($request->all());
        $request['user_id'] = Auth::user()->id;
        $request['picture'] = '';
        $request['status'] = '';
        if ($request->hasFile('picture1')){
            $pic = \App::make('\App\Libs\Imag')->url($_FILES['picture1']['tmp_name']);
            $request['picture'] = '/products/'. Auth::user()->id .'/'.$pic;
        }

        Product::create($request->all());
        return redirect()->back();
    }
    public function getDelete(Product $product){
        $product->delete();
        return redirect()->back();
    }

}

