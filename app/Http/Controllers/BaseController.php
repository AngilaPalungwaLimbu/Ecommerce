<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use View;



class BaseController extends Controller
{
    public function __construct()
    {

        if(Auth::user()){
            $cartCount=Cart::where('user_id',Auth::user()->id)->count();
        }
        else{
            $cartCount=0;
        }
        View::share('cart',$cartCount);

    }
}
