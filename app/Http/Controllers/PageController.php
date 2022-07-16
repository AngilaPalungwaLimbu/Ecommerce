<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function home()
    {
        $grocery = Category::where('slug', 'grocery')->first();
        $groceries = Product::where('category_id', $grocery->id)->get();
        if(Auth::user()){
            $cartCount = Cart::where('user_id', Auth::user()->id)->count();
            return view('frontend.pages.home', compact('groceries','cartCount'));
        }else{
            $cartCount=0;
            return view('frontend.pages.home', compact('groceries','cartCount'));
        }

    }
    public function product($id)
    {
        $product = Product::find($id);
        if(Auth::user()){
            $cartCount = Cart::where('user_id', Auth::user()->id)->count();
            return view('frontend.pages.product_detail', compact('product','cartCount'));
        }else{

            return view('frontend.pages.product_detail', compact('product','cartCount'));
        }
    }
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
