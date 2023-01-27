<?php

namespace Database\Seeders\Students;

use App\Models\Classes\Classes;
use App\Models\User\Student\StudentGrade;
use App\Models\User\User;
use App\Services\Common\Helpers\UserType;
use Database\Seeders\BaseSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use mysql_xdevapi\Exception;

class StudentSeeder extends BaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try
        {
            User::query()->create([
               'first_name' => fake()->firstName,
               'last_name' => fake()->lastName,
               'phone' => '992928259006',
               'login' => 'Student',
               'password' => bcrypt('password'),
               'user_type_id' => UserType::STUDENT,
                'class_id' => Classes::query()->first()->id
            ]);
        }
        catch (\Exception $exception)
        {
            echo  $exception->getFile();
        }
    }
}
