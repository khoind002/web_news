<?php

namespace App\Providers;
use App\Models\Category;


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
        view()->composer('Client/Blocks/subheader', function ($view) {
            $category = Category::limit(6)->get();
            $view->with('category', $category);
        });
        
        view()->composer('Client/Blocks/header', function ($view) {
            $category = Category::limit(12)->get();
            $view->with('category', $category);
        });

        
        

        
    }
}
