<?php
/**
 * Created by PhpStorm.
 * User: falcon9r
 * Date: 24.12.2022
 * Time: 22:45
 */

namespace App\Services\Common\User;


interface GeneratorUserContract
{
    public function  login() : string;

    public function  password() : string;
}
