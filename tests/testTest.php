<?php

declare(strict_types=1);

namespace jessica\composer\library\Test;

use jessica\composer\library\Test;

class TestTest extends TestCase
{
    public function testGetHello()
    {
        $object = \Mockery::mock(Test::class);
        $object->shouldReceive('getHello')->passthru();

        $this->assertSame('Hello, World!', $object->getHello());
    }
}
