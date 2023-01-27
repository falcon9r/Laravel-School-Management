<?php
/**
 * Created by PhpStorm.
 * User: falcon9r
 * Date: 22.12.2022
 * Time: 0:11
 */

namespace App\Repositories\Admin\Classes;


use App\Models\Classes\Classes;
use App\Models\User\User;
use App\Services\Common\Helpers\UserType;

class ClassesRepository implements ClassesContract
{
    public function classes()
    {
        return Classes::query()->get();
    }

    public function signs()
    {
        return [
            'А',
            'B',
            'C',
            'D'
        ];
    }

    public function numbers()
    {
        return [
            1,
            2,3,4,5,6,7,8,9,10,11
        ];
    }

    public function teachers()
    {
        return User::query()->where(User::USER_TYPE_ID , UserType::TEACHER)->get();
    }

    public function ClassById($class_id): Classes
    {
        return Classes::query()->find($class_id);
    }
}
