<?php

namespace Kusabi\Native\Tests\Functions\Strings;

use PHPUnit\Framework\TestCase;

/**
 * @covers \str_ends_with
 * @group functions
 * @group strings
 * @group queries
 * @group str_ends_with
 */
class EndsWithTest extends TestCase
{
    public function testEndsWithCaseSensitive()
    {
        $this->assertFalse(str_ends_with('Hello world', 'World'));
    }

    public function testEndsWithCharacter()
    {
        $this->assertTrue(str_ends_with('Hello world', 'd'));
    }

    public function testEndsWithFail()
    {
        $this->assertFalse(str_ends_with('Hello world', 'Hello'));
    }

    public function testEndsWithNothing()
    {
        $this->assertTrue(str_ends_with('Hello world', ''));
    }

    public function testEndsWithWhole()
    {
        $this->assertTrue(str_ends_with('Hello world', 'Hello world'));
    }

    public function testEndsWithWord()
    {
        $this->assertTrue(str_ends_with('Hello world', 'world'));
    }
}
