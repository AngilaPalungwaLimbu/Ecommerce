<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('frontend.pages.home');
    }
    public function product($id){
        return view('frontend.pages.product_detail');
    }
    public function cart(){
        return view('frontend.pages.cart');
    }
}
