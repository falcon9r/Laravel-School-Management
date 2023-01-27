<?php
/**
 * Created by PhpStorm.
 * User: falcon9r
 * Date: 28.12.2022
 * Time: 19:17
 */

namespace App\Services\Admin\Schedule;


interface DayContract
{
    public function days() : array;
}