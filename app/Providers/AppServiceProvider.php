<?php

namespace App\Providers;

use App\Repository\Category\AnotherCategory;
use App\Repository\Category\CategoryInterface;
use App\Repository\Category\CategoryRepository;
use App\Repository\Student\StudentInterface;
use App\Repository\Student\StudentRepository;
use App\Repository\User\UserInterface;
use App\Repository\User\UserRepository;
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
        $this->app->bind(UserInterface::class, UserRepository::class);
        $this->app->bind(StudentInterface::class, StudentRepository::class);
        $this->app->bind(CategoryInterface::class, CategoryRepository::class);
        //$this->app->bind(CategoryInterface::class, AnotherCategory::class);
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
