<?php
/**
 * Created by PhpStorm.
 * User: falcon9r
 * Date: 16.12.2022
 * Time: 11:26
 */

namespace App\Services\Admin\Classes;


use App\Models\Classes\Classes;

class ClassesRequestService implements ClassesRequestsContract
{
    public function is_invalid($sign, $number)
    {
        $exists = Classes::query()->where([
            'sign' => $sign,
            'number' => $number
        ])->exists();

        return $exists;
    }
}
