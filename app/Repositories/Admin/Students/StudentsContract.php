<?php
/**
 * Created by PhpStorm.
 * User: falcon9r
 * Date: 23.12.2022
 * Time: 14:31
 */

namespace App\Repositories\Admin\Students;


interface StudentsContract
{
    public  function studentByClassId($class_id) : array;
}
