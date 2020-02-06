<?php

namespace AideTravaux\Core\Tests;

use PHPUnit\Framework\TestCase;
use AideTravaux\Core\Model\Entries;

class EntriesTest extends TestCase
{
    public function testConstants()
    {
        $reflectionClass = new \ReflectionClass(Entries::class);
        $constants = $reflectionClass->getConstants();

        foreach ($constants as $key => $value) {
            $this->assertTrue(\is_array($value));
        }
    }
}
