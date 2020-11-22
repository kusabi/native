<?php

namespace Kusabi\Native\Tests\Functions\Arrays;

use PHPUnit\Framework\TestCase;

/**
 * @covers \array_deflate
 * @group functions
 * @group arrays
 * @group dot
 * @group array_deflate
 */
class ArrayDeflateTest extends TestCase
{
    public function testEmpty()
    {
        $this->assertSame([], array_deflate([], []));
    }

    public function testNestedKeepKeys()
    {
        $array = [
            'a' => 1,
            'b' => 2,
            'c' => [
                'a' => 1,
                'b' => 2,
                'c' => [
                    'a' => 1,
                    'b' => 2,
                    'c' => 3
                ]
            ]
        ];
        $this->assertSame([
            'a' => 1,
            'b' => 2,
            'c.a' => 1,
            'c.b' => 2,
            'c.c.a' => 1,
            'c.c.b' => 2,
            'c.c.c' => 3,
        ], array_deflate($array));
    }

    public function testNestedNoKeepKeys()
    {
        $array = [
            'a' => 1,
            'b' => 2,
            'c' => [
                'a' => 1,
                'b' => 2,
                'c' => [
                    'a' => 1,
                    'b' => 2,
                    'c' => 3
                ]
            ]
        ];
        $this->assertSame([
            1,
            2,
            1,
            2,
            1,
            2,
            3
        ], array_deflate($array, false));
    }

    public function testNoNestKeepKeys()
    {
        $array = [
            'a' => 1,
            'b' => 2
        ];
        $this->assertSame([
            'a' => 1,
            'b' => 2
        ], array_deflate($array));
    }

    public function testNoNestNoKeepKeys()
    {
        $array = [
            'a' => 1,
            'b' => 2
        ];
        $this->assertSame([
            1,
            2
        ], array_deflate($array, false));
    }
}
