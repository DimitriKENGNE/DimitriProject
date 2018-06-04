<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    protected $defer = true;

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        view()->composer('layouts.sidebar', function ($view) {    // On utilise un service provider pour renseigner la variable archives se trouvant
            $view->with('archives', \App\Post::archives());       // dans toutes les pages qui contiennent le sidebar
        });                                                       // $view renvoie � la page � afficher et \App\Post::archives() est la valeur de archives.
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton(Stripe::class, function() {
            return new Stripe(config('services.stripe.secret'));
        });

    }
}
