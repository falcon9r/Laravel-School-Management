<?php

namespace Database\Seeders\Common;

use App\Services\Common\Helpers\UserType;
use Database\Seeders\BaseSeeder;

class UserTypeSeeder extends BaseSeeder
{
    public function run()
    {
        $items = [
            [
                'id' => UserType::ADMIN,
                'name' => 'Admin',
                'description' => null,
            ],
            [
                'id' => UserType::TEACHER,
                'name' => 'Teacher',
                'description' => null,
            ],
            [
                'id' => UserType::STUDENT,
                'name' => 'Student',
                'description' => null,
            ],
        ];

        foreach ($items as $item) {
            try {
                \App\Models\UserType\UserType::query()->create($item);
            } catch (\Exception $e) {
                $this->logger->error($e->getMessage());
            }
        }
    }
}
