<?php
/**
 * Created by PhpStorm.
 * User: falcon9r
 * Date: 23.12.2022
 * Time: 14:33
 */

namespace App\Repositories\Admin\Students;


use App\Models\User\User;

class StudentsRepository implements StudentsContract
{
    public function studentByClassId($class_id): array
    {
        return User::query()->where('class_id' , $class_id)->get()->toArray();
    }
}
