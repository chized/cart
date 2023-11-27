<?php

namespace App\Http\Controllers\product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddProductController extends Controller
{
    //
    public function index(){
    
    return view("products.index");
    }

    public function create(){
    
        return view("products.add_product");
        }
}
