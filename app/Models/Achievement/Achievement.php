<?php

namespace App\Models\Achievement;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achievement extends BaseModel
{
    use HasFactory;

    const DIRECTORY = 'achievements';
    protected  $guarded = [];
}
