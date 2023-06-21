<?php

namespace Themegenie\LimitlessMaterial;

use Illuminate\Support\ServiceProvider;

class LimitlessMaterialServiceProvider extends ServiceProvider
{
    public function boot()
    {

        $this->loadViewsFrom(__DIR__ . '/resources/views', 'limitlessmaterial');

        $this->publishes([__DIR__ . '/../stubs/app'    => app_path('./'),], 'app');
        $this->publishes([__DIR__ . '/../stubs/config' => config_path('./'),], 'config');
        $this->publishes([__DIR__ . '/../stubs/resources/views'  => resource_path('views')], 'views');
        $this->publishes([__DIR__ . '/../stubs/public' => public_path('vendor/limitlessmaterial')], 'public');

        $this->layouts();
        $this->libs();
        $this->partials();
    }


    public function layouts()
    {
        \Illuminate\Support\Facades\Blade::component('sg-master', \Themegenie\LimitlessMaterial\App\View\Components\Layouts\Master::class);
        \Illuminate\Support\Facades\Blade::component('sg-guest', \Themegenie\LimitlessMaterial\App\View\Components\Layouts\GuestLayout::class);
        \Illuminate\Support\Facades\Blade::component('sg-blank', \Themegenie\LimitlessMaterial\App\View\Components\Layouts\Blank::class);
    }

    private function libs()
    {
        \Illuminate\Support\Facades\Blade::component('sg-style', \Themegenie\LimitlessMaterial\App\View\Components\Layouts\Libs\Style::class);
        \Illuminate\Support\Facades\Blade::component('sg-js', \Themegenie\LimitlessMaterial\App\View\Components\Layouts\Libs\Js::class);
    }

    private function partials()
    {
        \Illuminate\Support\Facades\Blade::component('sg-meta', \Themegenie\LimitlessMaterial\App\View\Components\Layouts\Partials\Meta::class);
        \Illuminate\Support\Facades\Blade::component('sg-dummy', \Themegenie\LimitlessMaterial\App\View\Components\Layouts\Partials\Dummy::class);
        \Illuminate\Support\Facades\Blade::component('sg-breadcrumb', \Themegenie\LimitlessMaterial\App\View\Components\Layouts\Partials\Breadcrumb::class);
        \Illuminate\Support\Facades\Blade::component('sg-title', \Themegenie\LimitlessMaterial\App\View\Components\Layouts\Partials\Title::class);
        \Illuminate\Support\Facades\Blade::component('sg-titlebar', \Themegenie\LimitlessMaterial\App\View\Components\Layouts\Partials\Title::class);
        \Illuminate\Support\Facades\Blade::component('sg-favicon', \Themegenie\LimitlessMaterial\App\View\Components\Layouts\Partials\Favicon::class);
        \Illuminate\Support\Facades\Blade::component('sg-navbar', \Themegenie\LimitlessMaterial\App\View\Components\Layouts\Partials\Navbar::class);
        \Illuminate\Support\Facades\Blade::component('sg-sidebar', \Themegenie\LimitlessMaterial\App\View\Components\Layouts\Partials\Sidebar::class);
        \Illuminate\Support\Facades\Blade::component('sg-pageheader', \Themegenie\LimitlessMaterial\App\View\Components\Layouts\Partials\Pageheader::class);
        \Illuminate\Support\Facades\Blade::component('sg-footer', \Themegenie\LimitlessMaterial\App\View\Components\Layouts\Partials\Footer::class);
        \Illuminate\Support\Facades\Blade::component('sg-msg', \Themegenie\LimitlessMaterial\App\View\Components\Layouts\Partials\Msg::class);
    }

    public function register()
    {
    }
}
