<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('backend.product.index');
    }

    public function create(){
        return view('backend.product.create');
}
}
