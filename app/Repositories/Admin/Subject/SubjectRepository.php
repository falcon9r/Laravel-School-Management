<?php
/**
 * Created by PhpStorm.
 * User: falcon9r
 * Date: 25.12.2022
 * Time: 16:58
 */

namespace App\Repositories\Admin\Subject;


use App\Models\Subject\Subject;

class SubjectRepository implements SubjectsContract
{
    public function subjects(): array
    {
        return Subject::all()->toArray();
    }

    public  function  SubjectsAsDictionary() : array
    {
        return Subject::query()->get()->getDictionary();
    }

    public function subjectById($id): array
    {
        return Subject::query()->find($id)->toArray();
    }
}
