<?php

namespace App\Providers;

use App\Repositories\Admin\Achievement\AchievementContract;
use App\Repositories\Admin\Achievement\AchievementRepository;
use App\Repositories\Admin\Classes\ClassesContract;
use App\Repositories\Admin\Classes\ClassesRepository;
use App\Repositories\Admin\News\NewsContract;
use App\Repositories\Admin\News\NewsRepository;
use App\Repositories\Admin\PhotoGallery\PhotoGalleryContract;
use App\Repositories\Admin\PhotoGallery\PhotoGalleryRepository;
use App\Repositories\Admin\Schedule\ScheduleContract;
use App\Repositories\Admin\Schedule\ScheduleRepository;
use App\Repositories\Admin\Students\StudentsContract;
use App\Repositories\Admin\Students\StudentsRepository;
use App\Repositories\Admin\Subject\SubjectRepository;
use App\Repositories\Admin\Subject\SubjectsContract;
use App\Repositories\Admin\Teachers\TeacherContract;
use App\Repositories\Admin\Teachers\TeacherRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->bind(ClassesContract::class , ClassesRepository::class);
        $this->app->bind(StudentsContract::class , StudentsRepository::class);
        $this->app->bind(SubjectsContract::class , SubjectRepository::class);
        $this->app->bind(TeacherContract::class , TeacherRepository::class);
        $this->app->bind(ScheduleContract::class , ScheduleRepository::class);
        $this->app->bind(PhotoGalleryContract::class , PhotoGalleryRepository::class);
        $this->app->bind(NewsContract::class , NewsRepository::class);
        $this->app->bind(AchievementContract::class , AchievementRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(): void
    {
        //
    }
}
