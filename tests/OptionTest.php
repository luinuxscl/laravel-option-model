<?php

namespace Luinuxscl\OptionPackage\Tests;

use Orchestra\Testbench\TestCase;
use Luinuxscl\OptionPackage\Models\Option;

class OptionTest extends TestCase
{
    public function test_create_option()
    {
        $option = Option::create([
            'key' => 'theme',
            'value' => 'dark',
            'optionable_id' => 1,
            'optionable_type' => 'App\Models\User'
        ]);

        $this->assertDatabaseHas('options', ['key' => 'theme', 'value' => 'dark']);
    }
}
