<?php

namespace App\Models\News;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;

class News extends BaseModel
{
    use HasFactory;
    use HasTranslations;

    const DIRECTORY = 'news';
    protected $guarded = [];

    public $translatable = ['title', 'text'];
}
