<?php
/**
 * Created by PhpStorm.
 * User: falcon9r
 * Date: 22.12.2022
 * Time: 0:09
 */

namespace App\Repositories\Admin\Classes;


use App\Models\Classes\Classes;

interface ClassesContract
{
    public function classes();

    public  function  signs();

    public  function numbers();

    public  function teachers();

    public  function  ClassById($class_id) : Classes;
}
