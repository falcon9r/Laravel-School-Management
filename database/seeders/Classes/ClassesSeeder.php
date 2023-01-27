<?php

namespace Database\Seeders\Classes;

use App\Models\Classes\Classes;
use App\Models\User\User;
use App\Services\Admin\Classes\ClassesRequestsContract;
use App\Services\Common\Helpers\UserType;
use Database\Seeders\BaseSeeder;

class ClassesSeeder extends BaseSeeder
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
            $checker = \App::make(ClassesRequestsContract::class);
            if(!($checker->is_invalid('A' , 11)))
            {
                Classes::query()->create([
                    'sign' => 'A',
                    'number' => 11,
                    'classroom_teacher' => User::query()->where('user_type_id' , UserType::TEACHER)->first()->id
                ]);
            }
        }catch (\Exception $exception)
        {
            $this->command->info($exception->getMessage());
        }
    }
}
