<?php

namespace Luinuxscl\OptionPackage\Models;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $fillable = ['key', 'value', 'optionable_id', 'optionable_type'];

    public function optionable()
    {
        return $this->morphTo();
    }
}
