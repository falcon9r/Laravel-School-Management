<?php
/**
 * Created by PhpStorm.
 * User: falcon9r
 * Date: 15.01.2023
 * Time: 13:08
 */

namespace App\Repositories\Admin\Achievement;


use App\Models\Achievement\Achievement;

class AchievementRepository implements AchievementContract
{
    private  $achievement;

    public function __construct(Achievement $achievement)
    {
        $this->achievement = $achievement;
    }

    public function achievementsActive($perPage = 12)
    {
        return $this->achievement->query()
            ->where('is_active' , true)
            ->paginate($perPage);
    }

    public function create($data)
    {
        return $this->achievement->query()->create($data);
    }
}