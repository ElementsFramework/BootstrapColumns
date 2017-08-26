<?php

namespace ElementsFramework\Layout;


use ElementsFramework\Elements\BootstrapColumns\Col6Col6BootstrapColumnElement;
use Illuminate\Support\ServiceProvider;

class BootstrapColumnServiceProvider extends ServiceProvider
{

    /**
     * Bootstraps the package.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'BootstrapColumns');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        view()->composer(
                'BootstrapColumns::col6-col6',
                Col6Col6BootstrapColumnElement::renderViewComposer
            );
    }

}