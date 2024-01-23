<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        return view('backend.product.index');
    }

    public function create(){
        return view('backend.product.create');
    }
    public function insert(Request $request){
        $pro = new Product();
        $pro->name = $request->name;
        $pro->price = $request->price;
        $pro->description = $request->description;
        $pro->category_id = $request->category_id;
        
        if($request->hasFile('image')){
            $filename = Str::random(10).'.'.$request->file('image')->getClientOriginalExtenstion();
            $request->file('image')->move(public_path().'/backend/product/upload/,$filename');

            $pro->image = $filename;
    }else{
        $pro->image = "ไม่มีรูปภาพ";
    }
    $pro->save();
    return redirect('admin/product/product');
        
    }
}
