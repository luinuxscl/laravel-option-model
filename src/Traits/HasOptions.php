<?php

namespace Luinuxscl\OptionPackage\Traits;

use Luinuxscl\OptionPackage\Models\Option;

trait HasOptions
{
    public function options()
    {
        return $this->morphMany(Option::class, 'optionable');
    }

    public function setOption(string $key, $value)
    {
        return $this->options()->updateOrCreate(['key' => $key], ['value' => $value]);
    }

    public function getOption(string $key, $default = null)
    {
        return $this->options()->where('key', $key)->value('value') ?? $default;
    }

    public function removeOption(string $key)
    {
        return $this->options()->where('key', $key)->delete();
    }
}
