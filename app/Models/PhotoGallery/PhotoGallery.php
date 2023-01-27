<?php

namespace App\Models\PhotoGallery;

use App\Models\BaseModel;
use Faker\Provider\Base;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Models\PhotoGallery\PhotoGallery
 *
 * @property string $id
 * @property string $description
 * @property string $photo
 * @property string $url
 * @property int|null $position
 * @property boolean $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PhotoGallery newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PhotoGallery newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PhotoGallery query()
 * @method static \Illuminate\Database\Eloquent\Builder|PhotoGallery whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhotoGallery whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhotoGallery whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhotoGallery whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhotoGallery wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhotoGallery wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhotoGallery whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PhotoGallery extends BaseModel
{
    use HasFactory;

    const DIRECTORY = "images/photo-gallery";

    protected  $guarded = [];

    protected $fillable = [
        'description',
        'photo',
        'position',
        'is_active'
    ];

    public function getPhotoAttribute($value): string
    {
        return self::DIRECTORY . DIRECTORY_SEPARATOR . $value;
    }

    public function getThumbPhotoAttribute(): string
    {
        return self::DIRECTORY . DIRECTORY_SEPARATOR . 'thumb-' . $this->original['photo'];
    }
}
