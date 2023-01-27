<?php

namespace App\Models\Classes\ClassesHistory;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Models\Classes\ClassesHistory\ClassesHistory
 *
 * @method static \Illuminate\Database\Eloquent\Builder|ClassesHistory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClassesHistory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ClassesHistory query()
 * @mixin \Eloquent
 * @property string $parent_id
 * @property string $sign
 * @property int $number
 * @property string $who_change
 * @property int|null $shift истино: после обеда иначе до
 * @property string $classroom_teacher
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ClassesHistory whereClassroomTeacher($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassesHistory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassesHistory whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassesHistory whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassesHistory whereShift($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassesHistory whereSign($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassesHistory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ClassesHistory whereWhoChange($value)
 */
class ClassesHistory extends BaseModel
{
    use HasFactory;
    protected  $fillable = [
        'parent_id',
        'sign',
        'who_change',
        'number',
        'classroom_teacher'
    ];
}
