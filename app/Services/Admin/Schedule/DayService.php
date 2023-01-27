<?php
/**
 * Created by PhpStorm.
 * User: falcon9r
 * Date: 28.12.2022
 * Time: 19:18
 */

namespace App\Services\Admin\Schedule;


use App\Services\Common\Helpers\Day\Day;

class DayService implements DayContract
{
    public function days(): array
    {
        $days = trans('days');
        unset($days[Day::SUNDAY]);
        return $days;
    }
}