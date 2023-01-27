<?php
/**
 * Created by PhpStorm.
 * User: falcon9r
 * Date: 24.12.2022
 * Time: 22:44
 */

namespace App\Services\Common\User;


use App\Models\User\User;

class GeneratorUserService implements GeneratorUserContract
{

    /**
     * @return string
     * @throws \Exception
     */
    public function login(): string
    {
        $login = "fake-";
        $login .= (string)random_int(10 , 99);
        // GENERATE 3 RANDOM CHAR
        $login .= substr(md5(microtime()),rand(0,26),3);
        if(User::query()->where('login', $login)->exists())
        {
            return $this->login();
        }
        return $login;
    }

    /**
     * @return string
     */
    public function password(): string
    {
        return fake()->password;
    }
}
