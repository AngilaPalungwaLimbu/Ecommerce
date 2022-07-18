<?php

namespace App\View\Components\Components;

use App\Models\Cart;
use Illuminate\View\Component;

class Navbar extends Component
{

    protected $cartCount;
    // protected $category;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($cartCount)
    {
        $this->cartCount=$cartCount;
        // $this->category=$category;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $cartCount=$this->cartCount;
        // $category=$this->category;

        return view('components.components.navbar',compact('cartCount'));
    }
}
