<?php

namespace App\Providers;

use App\Repositories\Eloquent\EloquentRepository;
use App\Repositories\Eloquent\User_groupRepository;
use App\Repositories\Interfaces\RepositoryInterface;
use App\Repositories\Interfaces\User_groupInterface;
use App\Services\Interfaces\User_groupServiceInterface;
use App\Services\User_groupService;
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
        /* Binding  Repository*/
        //RepositoryInterface - EloquentRepository
        $this->app->singleton(RepositoryInterface::class, EloquentRepository::class);
        //CourseInterface - CourseRepository
        $this->app->singleton(User_groupInterface::class, User_groupRepository::class);

        /* Binding  Service*/
        $this->app->singleton(User_groupServiceInterface::class, User_groupService::class);
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
