<?php

namespace App\Models\Schedule;

use App\Models\BaseModel;
use App\Models\Subject\Subject;
use App\Models\User\User;
use App\Services\Common\Helpers\UserType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Schedule\Schedule
 *
 * @property-read Subject|null $subject
 * @property-read User|null $teacher
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule query()
 * @mixin \Eloquent
 * @property string $id
 * @property string $class_id
 * @property string $subject_id
 * @property string|null $teacher_id
 * @property int $hour
 * @property int $day
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereClassId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereHour($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereSubjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereTeacherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Schedule whereUpdatedAt($value)
 */
class Schedule extends BaseModel
{
    use HasFactory;

    const FIELD_HOUR = 'hour';

    protected $table = 'schedules';

    protected $guarded = [];

    public function subject()
    {
        return $this->belongsTo(Subject::class , 'subject_id' , 'id');
    }

    public function teacher(){
        return $this->belongsTo(User::class , 'teacher_id' , 'id');
    }
}
