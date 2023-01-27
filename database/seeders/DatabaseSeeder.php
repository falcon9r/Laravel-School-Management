<?php

namespace Database\Seeders;

use Database\Seeders\Admin\AdminSeeder;
use Database\Seeders\Common\UserTypeSeeder;
use Database\Seeders\Classes\ClassesSeeder;
use Database\Seeders\Students\StudentSeeder;
use Database\Seeders\Subject\SubjectSeeder;
use Database\Seeders\Teacher\TeacherSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {

        $this->call([
            UserTypeSeeder::class,
            TeacherSeeder::class,
            ClassesSeeder::class,
            StudentSeeder::class,
            AdminSeeder::class,
            SubjectSeeder::class
        ]);
    }
}
