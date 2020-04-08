<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Upcoming extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = ['title', 'body'];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('upcoming')
              ->singleFile();

    }

}
