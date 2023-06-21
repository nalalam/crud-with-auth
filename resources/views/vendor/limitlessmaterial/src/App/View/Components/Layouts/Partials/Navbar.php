<?php

namespace Themegenie\LimitlessMaterial\App\View\Components\Layouts\Partials;

use Illuminate\View\Component;

class Navbar extends Component
{

    public function __construct()
    {
    }

    public function render()
    {
        return view('limitlessmaterial::components.layouts.partials.navbar');
    }
}
