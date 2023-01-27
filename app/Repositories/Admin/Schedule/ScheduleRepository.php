<?php
/**
 * Created by PhpStorm.
 * User: falcon9r
 * Date: 29.12.2022
 * Time: 14:58
 */

namespace App\Repositories\Admin\Schedule;


use App\Models\Schedule\Schedule;

class ScheduleRepository implements ScheduleContract
{
    public function ScheduleByClassIdAndDay($class_id, $day)
    {
        $schedule = Schedule::query()->where([
            'day' => $day,
            'class_id' => $class_id
        ])->orderBy(Schedule::FIELD_HOUR)->get();
        return $schedule;
    }
}