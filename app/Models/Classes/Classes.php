<?php

namespace App\Models\Classes;

use App\Models\BaseModel;
use App\Models\User\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * App\Models\Classes\Classes
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read User|null $teacher
 * @method static \Illuminate\Database\Eloquent\Builder|Classes newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Classes newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Classes query()
 * @method static \Illuminate\Database\Eloquent\Builder|Classes whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Classes whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Classes whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $sign
 * @property int $number
 * @property int|null $shift истино: после обеда иначе до
 * @property string $classroom_teacher
 * @method static \Illuminate\Database\Eloquent\Builder|Classes whereClassroomTeacher($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Classes whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Classes whereShift($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Classes whereSign($value)
 */
class Classes extends BaseModel
{
    use HasFactory;

    protected  $table = 'classes';

    protected $fillable = [
        'id',
        'sign',
        'number',
        'classroom_teacher'
    ];

    protected $appends = ['name'];

    public  function  teacher(): HasOne
    {
        return $this->hasOne(User::class , 'id' , 'classroom_teacher');
    }

    public function getNameAttribute() : string
    {
        return $this->number.$this->sign;
    }
}
