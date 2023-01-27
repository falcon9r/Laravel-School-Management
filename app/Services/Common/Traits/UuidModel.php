<?php

namespace App\Services\Common\Traits;

use Ramsey\Uuid\Uuid;

trait UuidModel
{
    protected static function boot(): void
    {
        parent::boot();

        static::creating(function ($model) {

            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = (string)Uuid::uuid4();
            }

        });
    }

}
