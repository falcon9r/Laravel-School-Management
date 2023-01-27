<?php

namespace App\Http\ViewComposers;

use App\Services\Common\Helpers\Navbar;
use Illuminate\View\View;

class NavbarComposer
{
    private Navbar $navbar;

    public function __construct(
        Navbar $navbar
    ) {
        $this->navbar = $navbar;
    }

    public function compose(View $view): void
    {
        $view->with('navbar', $this->navbar);
    }
}
