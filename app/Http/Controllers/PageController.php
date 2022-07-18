<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
// use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if(Auth::user()){
                $cartCount = Cart::where('user_id', Auth::user()->id)->count();
                View::share([
                    'cartCount'=>$cartCount
                ]);

            }else{
                View::share([
                    'cartCount'=>0
                ]);
            }
         return $next($request);
        });
    }


    public function home()
    {
        $grocery = Category::where('slug', 'grocery')->first();
        $groceries = Product::where('category_id', $grocery->id)->get();
        $groceries = Product::where('category_id', $grocery->id)->get();
        $maxDisc = Product::orderBy('discount_percent','DESC')->limit(10)->get();
        // $category = Category::where('status', true)->get();
        // if(Auth::user()){
        //     $cartCount = Cart::where('user_id', Auth::user()->id)->count();

        // }else{
        //     $cartCount=0;
        // }
        return view('frontend.pages.home', compact('groceries' ,'maxDisc',));

    }
    public function product($id)
    {
        $product = Product::find($id);
        return view('frontend.pages.product_detail', compact('product',));
    }


    // Cart
    public function cart()
    {
        if (Auth::user()) {
            $cartItems = Cart::where('user_id', Auth::user()->id)->get();
            $totalAmount = Cart::where('user_id', Auth::user()->id)->sum('amount');
            $cartCount = Cart::where('user_id', Auth::user()->id)->count();
            return view('frontend.pages.cart', compact('cartItems','totalAmount','cartCount'));
        } else {
            return redirect('/login');
        }
    }
    public function addToCart(Request $request)
    {
        $cart = new Cart();
        $cart->product_id = $request->product_id;
        $cart->qty = $request->qty;
        $cart->amount = $request->selling_price * $request->qty;
        $cart->user_id = Auth::user()->id;
        $cart->save();
        return redirect()->back();
    }
    public function deleteCartItem($id)
    {
        $cartItem = Cart::find($id);
        $cartItem->delete();
        return redirect()->back();
    }
    public function UpdateCartItem(Request $request, $id)
    {
        $cart = Cart::find($id);
        // return $cart;
        $cart->qty = $request->qty;
        $cart->amount = $request->selling_price * $request->qty;
        $cart->user_id = Auth::user()->id;
        $cart->update();
        return redirect()->back();
    }
}
