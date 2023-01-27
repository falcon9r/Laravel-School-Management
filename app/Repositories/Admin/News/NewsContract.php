<?php
/**
 * Created by PhpStorm.
 * User: falcon9r
 * Date: 14.01.2023
 * Time: 18:05
 */

namespace App\Repositories\Admin\News;


interface NewsContract
{
    public  function  newsActive($paginate = 10);
}