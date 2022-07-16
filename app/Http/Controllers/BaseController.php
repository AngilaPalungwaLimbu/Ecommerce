<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use View;

use App\Models\Category;
use App\Models\Product;


class BaseController extends Controller
{
    public function __construct()
    {

        $CartCount=Cart::where('user_id',Auth::user()->id)->count();
        View::share('cart',$CartCount);

    }
}
