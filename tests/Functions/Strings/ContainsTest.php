<?php

namespace Kusabi\Native\Tests\Functions\Strings;

use PHPUnit\Framework\TestCase;

/**
 * @covers \str_contains
 * @group functions
 * @group strings
 * @group queries
 * @group str_contains
 */
class ContainsTest extends TestCase
{
    public function testContainsCaseSensitive()
    {
        $this->assertFalse(str_contains('Hello world', 'World'));
    }

    public function testContainsCharacter()
    {
        $this->assertTrue(str_contains('Hello world', 'w'));
    }

    public function testContainsFail()
    {
        $this->assertFalse(str_contains('Hello world', 'not here'));
    }

    public function testContainsWhole()
    {
        $this->assertTrue(str_contains('Hello world', 'Hello world'));
    }

    public function testContainsWord()
    {
        $this->assertTrue(str_contains('Hello world', 'world'));
    }
}
