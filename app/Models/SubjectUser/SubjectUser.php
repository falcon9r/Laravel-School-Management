<?php

namespace App\Models\SubjectUser;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\SubjectUser\SubjectUser
 *
 * @method static \Illuminate\Database\Eloquent\Builder|SubjectUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SubjectUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SubjectUser query()
 * @mixin \Eloquent
 * @property string $id
 * @property string $subject_id
 * @property string $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|SubjectUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubjectUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubjectUser whereSubjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubjectUser whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubjectUser whereUserId($value)
 */
class SubjectUser extends BaseModel
{
    use HasFactory;

    protected $table = 'subject_users';
    protected $guarded = [];
}
