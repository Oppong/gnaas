<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Slider extends Model implements HasMedia
{

  use InteractsWithMedia;

    protected $fillable = ['title', 'content'];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('images')
              ->singleFile();

    }

}
