<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use Illuminate\Support\Facades\DB;

class productcontroller extends Controller
{
    public function index(){
        $products = product::inRandomOrder()->take(11)->get();

        return view('products')->with('products',$products);
    
    }

    public function show($id){
        $product= product::where('id',$id)->firstOrFail();

        return view('product')->with('product',$product);
    }

    function getClothes()
    {
        $clothes = DB::table('products')->where('category_id', '1')->get();
        return $clothes;
    }

    function getShoes()
    {
        $shoes = DB::table('products')->where('category_id', '2')->get();
        return $shoes;
    }

    function getBags()
    {
        $bags = DB::table('products')->where('category_id', '3')->get();
        return $bags;
    }

    function getAccessories()
    {
        $accessories = DB::table('products')->where('category_id', '4')->get();
        return $accessories;
    }

}
