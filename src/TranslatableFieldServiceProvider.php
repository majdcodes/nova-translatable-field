<?php

namespace Kreatorij\Nova\Fields;

use Laravel\Nova\Nova;
use Laravel\Nova\Events\ServingNova;
use Illuminate\Support\ServiceProvider;

class TranslatableFieldServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Nova::serving(function (ServingNova $event) {
            Nova::script('translatable-field', __DIR__.'/../dist/js/field.js');
            Nova::style('translatable-field', __DIR__.'/../dist/css/field.css');
        });

		$this->publishes([
			__DIR__ . '/../config/nova-translatable-field.php' => config_path('nova/nova-translatable-field.php'),
		], 'config');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
