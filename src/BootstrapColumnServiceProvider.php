<?php

namespace ElementsFramework\Elements\BootstrapColumns;


use ElementsFramework\Elements\BootstrapColumns\UIElements\TwoColumnBootstrapColumnElement;
use Illuminate\Contracts\View\View;
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
            'BootstrapColumns::two-columns',
            function(View $view) {
                TwoColumnBootstrapColumnElement::renderViewComposer($view);
            }
        );
    }

}