<?php
/**
 * Created by PhpStorm.
 * User: falcon9r
 * Date: 14.01.2023
 * Time: 18:05
 */

namespace App\Repositories\Admin\News;


use App\Models\News\News;

class NewsRepository implements NewsContract
{
    public function newsActive($paginate = 10)
    {
        return News::query()->where('is_active' , true)->paginate($paginate);
    }
}