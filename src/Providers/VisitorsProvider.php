<?php

namespace Diyar\Visitors\Providers;

use Illuminate\Support\ServiceProvider;

class VisitorsProvider extends ServiceProvider
{



	public function register()
	{

	}


    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
	    //

	    $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
	    $this->loadViewsFrom(__DIR__.'/../views', 'visitors');

	    $this->loadMigrationsFrom(__DIR__.'/../../database/migrations');
    }
}


