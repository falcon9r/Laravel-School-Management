<?php
/**
 * Created by PhpStorm.
 * User: falcon9r
 * Date: 22.12.2022
 * Time: 13:50
 */

namespace App\Services\Admin\Classes;


interface ClassesRequestsContract
{
    public  function  is_invalid($sign , $number);
}
