<?php

namespace App\View\Components\Components;

use App\Models\Cart;
use Illuminate\View\Component;

class Navbar extends Component
{

    protected $cartCount;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    protected $product;
    public function __construct($cartCount)
    {
        $this->cartCount=$cartCount;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $cartCount=$this->cartCount;
        return view('components.components.navbar',compact('cartCount'));
    }
}
