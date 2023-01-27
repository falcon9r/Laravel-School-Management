<?php

namespace Database\Seeders\Admin;

use App\Models\User\User;
use App\Services\Common\Helpers\UserType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try{
            User::query()->create([
                'first_name' => 'admin',
                'last_name' => 'admin',
                'login' => 'Admin',
                'password' => bcrypt("password"),
                'phone' => '553339006',
                'user_type_id' => UserType::ADMIN
            ]);
        }catch (\Exception $exception)
        {
            echo  $exception->getMessage();
        }

    }
}
