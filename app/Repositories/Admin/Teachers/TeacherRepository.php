<?php
/**
 * Created by PhpStorm.
 * User: falcon9r
 * Date: 28.12.2022
 * Time: 1:10
 */

namespace App\Repositories\Admin\Teachers;


use App\Models\User\User;
use App\Services\Common\Helpers\UserType;

class TeacherRepository implements TeacherContract
{
    public function teachers()
    {
        return User::query()->where(User::USER_TYPE_ID , UserType::TEACHER)->get();
    }
}