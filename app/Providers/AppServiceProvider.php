<?php

namespace App\Providers;

use App\Models\Backend\AdditionalFeatures\SiteSetting;
use App\Models\Backend\PartsManagement\PartsParentBrand;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);

        View::composer('frontend.includes.footer', function ($view) {
            $view->with([
                'siteSettings'  => SiteSetting::all(),
            ]);
        });

        View::composer('frontend.includes.header', function ($view) {
            $view->with([
                'partsParentBrands'     => PartsParentBrand::where('status', 1)->select('id', 'name', 'logo')->get(),
                'siteSettings'          => SiteSetting::all(),
            ]);
        });
    }
}
