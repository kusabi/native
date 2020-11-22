<?php

namespace Kusabi\Native\Benchmarks\Functions\Strings;

use Kusabi\Native\Benchmarks\Bench;

/**
 * @BeforeClassMethods({"setup"})
 */
class StringQueries extends Bench
{
    protected static $long;

    public static function setup()
    {
        $half = str_repeat('Lorem ipsum dolor sit amet. ', 1000);
        static::$long = $half.'In the middle. '.$half;
    }

    public function benchContainsCharacter()
    {
        str_contains('Hello world', 'r');
    }

    public function benchContainsFail()
    {
        str_contains('Hello world', 'howdy');
    }

    public function benchContainsMultipleCharacters()
    {
        str_contains('Hello world', 'llo wo');
    }

    public function benchContainsSuperLong()
    {
        str_contains(static::$long, 'In the middle.');
    }

    public function benchContainsWholeString()
    {
        str_contains('Hello world', 'Hello world');
    }

    public function benchEndsWithCharacter()
    {
        str_ends_with('Hello world', 'd');
    }

    public function benchEndsWithFail()
    {
        str_ends_with('Hello world', 'howdy');
    }

    public function benchEndsWithMultipleCharacters()
    {
        str_ends_with('Hello world', 'world');
    }

    public function benchEndsWithStart()
    {
        str_ends_with('Hello world', 'Hello');
    }

    public function benchEndsWithSuperLong()
    {
        str_ends_with(static::$long, 'Lorem ipsum dolor sit amet.');
    }

    public function benchEndsWithWholeString()
    {
        str_ends_with('Hello world', 'Hello world');
    }

    public function benchStartsWithCharacter()
    {
        str_starts_with('Hello world', 'H');
    }

    public function benchStartsWithEnding()
    {
        str_starts_with('Hello world', 'world');
    }

    public function benchStartsWithFail()
    {
        str_starts_with('Hello world', 'howdy');
    }

    public function benchStartsWithMultipleCharacters()
    {
        str_starts_with('Hello world', 'Hello');
    }

    public function benchStartsWithSuperLong()
    {
        str_starts_with(static::$long, 'Lorem ipsum dolor sit amet.');
    }

    public function benchStartsWithWholeString()
    {
        str_starts_with('Hello world', 'Hello world');
    }
}
