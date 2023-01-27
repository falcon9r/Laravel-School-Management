<?php

namespace App\Models\User\UserHistory;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Models\User\UserHistory\UserHistory
 *
 * @property string $parent_id
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $middle_name
 * @property string|null $avatar
 * @property string $phone
 * @property string $login
 * @property string $user_type_id
 * @property string $who_change
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|UserHistory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserHistory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserHistory query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserHistory whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserHistory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserHistory whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserHistory whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserHistory whereLogin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserHistory whereMiddleName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserHistory whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserHistory wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserHistory whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserHistory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserHistory whereUserTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserHistory whereWhoChange($value)
 * @mixin \Eloquent
 */
class UserHistory extends BaseModel
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'parent_id',
        'first_name',
        'last_name',
        'middle_name',
        'phone',
        'avatar',
        'user_type_id',
        'login',
        'who_change'
    ];
}
