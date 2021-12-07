<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class productsController extends Controller
{
    //
    public function display(){
        return view('products');
    }
}
