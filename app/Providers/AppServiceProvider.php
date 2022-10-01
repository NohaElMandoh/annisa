<?php

namespace App\Providers;

use App\Models\Aggrement;
use App\Models\BudgetsType;
use App\Models\CaseStudy;
use App\Models\Slider;
use App\Models\Website;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        view()->composer('*', function ($view) {

            $view->with('website',   Website::find(1));
            $view->with('slider',   Slider::all());
            $view->with('aggrements',   Aggrement::all());
            $view->with('cases',   CaseStudy::all());
            $view->with('budgets',   BudgetsType::all());
 
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
