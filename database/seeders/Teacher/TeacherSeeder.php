<?php

namespace Database\Seeders\Teacher;

use App\Models\User\User;
use App\Services\Common\Helpers\UserType;
use Database\Seeders\BaseSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeder extends BaseSeeder
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
                'first_name' => 'teacher',
                'last_name' => 'teacher',
                'login' => 'Teacher',
                'password' => bcrypt("password"),
                'phone' => '553339006',
                'user_type_id' => UserType::TEACHER
            ]);
        }catch (\Exception $exception)
        {
            $this->command->info($exception->getMessage());
        }
    }
}
