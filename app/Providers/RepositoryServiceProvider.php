<?php

namespace App\Providers;

/**
 *Interface Register
 *
 */
use App\Interfaces\AuthRepositoryInterface;
use App\Interfaces\MentorRepositoryInterface;
use App\Interfaces\StudentRepositoryInterface;
use App\Interfaces\WriterRepositoryInterface;
use App\Interfaces\RoleRepositoryInterface;
use App\Interfaces\PermissionRepositoryInterface;
use App\Interfaces\ArticleCategoryRepositoryInterface;
use App\Interfaces\ArticleTagRepositoryInterface;
use App\Interfaces\ArticleRepositoryInterface;
use App\Interfaces\UniversityRepositoryInterface;
use App\Interfaces\FacultyRepositoryInterface;
use App\Interfaces\CourseCategoryRepositoryInterface;
use App\Interfaces\CourseRepositoryInterface;

/**
 *Repository Register
 *
 */
use App\Repositories\AuthRepository;
use App\Repositories\MentorRepository;
use App\Repositories\StudentRepository;
use App\Repositories\WriterRepository;
use App\Repositories\RoleRepository;
use App\Repositories\PermissionRepository;
use App\Repositories\ArticleCategoryRepository;
use App\Repositories\ArticleTagRepository;
use App\Repositories\ArticleRepository;
use App\Repositories\UniversityRepository;
use App\Repositories\FacultyRepository;
use App\Repositories\CourseCategoryRepository;
use App\Repositories\CourseRepository;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(AuthRepositoryInterface::class, AuthRepository::class);
        $this->app->bind(MentorRepositoryInterface::class, MentorRepository::class);
        $this->app->bind(StudentRepositoryInterface::class, StudentRepository::class);
        $this->app->bind(WriterRepositoryInterface::class, WriterRepository::class);
        $this->app->bind(RoleRepositoryInterface::class, RoleRepository::class);
        $this->app->bind(PermissionRepositoryInterface::class, PermissionRepository::class);
        $this->app->bind(ArticleCategoryRepositoryInterface::class, ArticleCategoryRepository::class);
        $this->app->bind(ArticleTagRepositoryInterface::class, ArticleTagRepository::class);
        $this->app->bind(ArticleRepositoryInterface::class, ArticleRepository::class);
        $this->app->bind(UniversityRepositoryInterface::class, UniversityRepository::class);
        $this->app->bind(FacultyRepositoryInterface::class, FacultyRepository::class);
        $this->app->bind(CourseCategoryRepositoryInterface::class, CourseCategoryRepository::class);
        $this->app->bind(CourseRepositoryInterface::class, CourseRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
