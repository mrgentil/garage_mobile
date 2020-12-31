<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;


class Service extends Model
{

    public function getFileAttribute($file)
    {
        if (Str::startsWith($file, 'http://') || Str::startsWith($file, 'https://')) {
            return asset(Voyager::image($file));
        }
        return Voyager::image($file);
    }

    public function getSlugLinkAttribute()
    {
        return route('service.show', $this->id . '-' . str_slug($this->name));
    }

    public function getOrderAttribute()
    {
        return route('service.order', $this->id . '-' . str_slug($this->name));
    }
}
