<?php

namespace BeachcomberDigital\Fibr\Traits;

use Illuminate\Database\Eloquent\Model;

trait Publishable
{
    // add published_at to fillable
    public static function bootPublishable()
    {
        static::creating(function (Model $model) {
            $model->published_at = now();
        });
    }

    // add published_at to casts
    // add published_at to dates

    // add published_at to getRouteKeyName
    // add published_at to scopePublished
    // add published_at to scopeUnpublished
    // add publish()
    // add unpublish()
    // add isPublished()
    // add isUnpublished()

    public function scopePublished($query)
    {
        return $query->where('published_at', '<=', now());
    }

    public function scopeUnpublished($query)
    {
        return $query->where('published_at', '>', now());
    }

    public function publish()
    {
        $this->published_at = now();
        $this->save();
    }

    public function unpublish()
    {
        $this->published_at = null;
        $this->save();
    }

    public function isPublished()
    {
        return $this->published_at <= now();
    }

    public function isUnpublished()
    {
        return $this->published_at > now();
    }
}
