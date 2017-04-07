<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ShopServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Contracts\Repositories\ActivityRepositoryInterface', 'App\Repositories\ActivityRepository');
        $this->app->bind('App\Contracts\Repositories\ArticleRepositoryInterface', 'App\Repositories\ArticleRepository');
        $this->app->bind('App\Contracts\Repositories\AuctionRepositoryInterface', 'App\Repositories\AuctionRepository');
        $this->app->bind('App\Contracts\Repositories\BrandRepositoryInterface', 'App\Repositories\BrandRepository');
        $this->app->bind('App\Contracts\Repositories\CategoryRepositoryInterface', 'App\Repositories\CategoryRepository');
        $this->app->bind('App\Contracts\Repositories\CommentRepositoryInterface', 'App\Repositories\CommentRepository');
        $this->app->bind('App\Contracts\Repositories\ExchangeRepositoryInterface', 'App\Repositories\ExchangeRepository');
        $this->app->bind('App\Contracts\Repositories\FlowRepositoryInterface', 'App\Repositories\FlowRepository');
        $this->app->bind('App\Contracts\Repositories\GoodsRepositoryInterface', 'App\Repositories\GoodsRepository');
        $this->app->bind('App\Contracts\Repositories\GroupBuyRepositoryInterface', 'App\Repositories\GroupBuyRepository');
        $this->app->bind('App\Contracts\Repositories\SnatchRepositoryInterface', 'App\Repositories\SnatchRepository');
        $this->app->bind('App\Contracts\Repositories\TopicRepositoryInterface', 'App\Repositories\TopicRepository');
        $this->app->bind('App\Contracts\Repositories\UserRepositoryInterface', 'App\Repositories\UserRepository');
        $this->app->bind('App\Contracts\Repositories\WholesaleRepositoryInterface', 'App\Repositories\WholesaleRepository');
    }
}
