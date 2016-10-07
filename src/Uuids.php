<?php

namespace SevenShores\Uuids;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

trait Uuids
{
    public static function bootUuids()
    {
        static::creating(function (Model $model) {
            $key = $model->getKeyName();
            if (empty($model->{$key})) {
                $model->{$key} = Uuid::uuid4()->toString();
            }
        });
    }
}
