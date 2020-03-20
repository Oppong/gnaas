<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Upcoming extends Model implements HasMedia
{

    use HasMediaTrait;

    protected $fillable = ['title', 'body'];

    public function registerMediaCollections()
    {
        $this
            ->addMediaCollection('upcoming')
            ->singleFile();
    }
}
