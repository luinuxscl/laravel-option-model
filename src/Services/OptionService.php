<?php

namespace TuNamespace\OptionModel\Services;

use TuNamespace\OptionModel\Models\Option;

class OptionService
{
    public function get($key)
    {
        return Option::where('key', $key)->first()->value ?? null;
    }

    public function set($key, $value)
    {
        return Option::updateOrCreate(['key' => $key], ['value' => $value]);
    }
}
