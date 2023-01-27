<?php
/**
 * Created by PhpStorm.
 * User: falcon9r
 * Date: 15.01.2023
 * Time: 13:07
 */

namespace App\Repositories\Admin\Achievement;


interface AchievementContract
{
    public function achievementsActive($perPage = 12);
    public function create($data);
}