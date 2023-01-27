<?php
/**
 * Created by PhpStorm.
 * User: falcon9r
 * Date: 25.12.2022
 * Time: 16:56
 */

namespace App\Repositories\Admin\Subject;


interface SubjectsContract
{
    public  function  subjects() : array;

    public  function  SubjectsAsDictionary() : array;

    public function  subjectById($id): array;
}
