<?php
/**
 * Created by PhpStorm.
 * User: falcon9r
 * Date: 29.12.2022
 * Time: 14:56
 */

namespace App\Repositories\Admin\Schedule;


interface ScheduleContract
{
    /**
     * @param $class_id
     * @param $day only his key not value
     * @return mixed
     */
    public  function ScheduleByClassIdAndDay($class_id , $day);
}