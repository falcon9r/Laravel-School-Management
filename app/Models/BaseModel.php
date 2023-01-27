<?php

namespace App\Models;

use App\Services\Common\Traits\UuidModel;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\BaseModel
 *
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel query()
 * @mixin \Eloquent
 */
class BaseModel extends Model
{
    use UuidModel {
        UuidModel::boot as boot_uuid;
    }

    protected static function boot()
    {
        self::boot_uuid();
    }

    public $incrementing = false;

    protected $keyType = 'string';

}
