<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    function show($id)
    {
        $products = DB::table('products')

            ->join('product_cats', function ($join) {
                $join->on('product_cats.id', '=', 'products.product_cat_id');
            })
            ->where('products.id', $id)
            ->select('product_cats.cat_title', 'products.*')
            ->get();
        echo "<pre>";
        print_r($products);
        echo "</pre>";
    }
    function add()
    {
        DB::table('products')
            ->insert(['name' => 'name3', 'content' => 'content3', 'price' => '696969']);
    }
    function update($id)
    {
        DB::table('products')
            ->where('id', $id)
            ->update(['name' => 'name_update']);
    }
    function delete($id)
    {
        DB::table('products')
            ->where('id', $id)
            ->delete();
    }
}
