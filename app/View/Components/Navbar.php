<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $navbar = [
            'Home' => '/',
            'Contact' => '/contact',
            'About' => '/about',
            'Profile' => '/profile',
        ];
        return view('layouts.navbar', compact('navbar'));
            // ['navbar' => $navbar]        // -- Karena namanya sama dapat dengan memanggil compact
    }
}
