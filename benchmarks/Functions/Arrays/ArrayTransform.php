<?php

namespace Kusabi\Native\Benchmarks\Functions\Arrays;

use Kusabi\Native\Benchmarks\Bench;

/**
 * @BeforeMethods({"init"})
 */
class ArrayTransform extends Bench
{
    protected $array;

    protected $deflatedArray;

    protected $nestedArray;

    public function benchDeflateNestedDiscardKeys()
    {
        array_deflate($this->nestedArray, false);
    }

    public function benchDeflateNestedKeepKeys()
    {
        array_deflate($this->nestedArray);
    }

    public function benchDeflateNotNestedDiscardKeys()
    {
        array_deflate($this->array, false);
    }

    public function benchDeflateNotNestedKeepKeys()
    {
        array_deflate($this->array);
    }

    public function benchExceptFew()
    {
        array_except($this->array, ['a', 'b', 'c', 'd']);
    }

    public function benchExceptMany()
    {
        array_except($this->array, ['a', 'b', 'c', 'd', 'e', 'f']);
    }

    public function benchExceptNone()
    {
        array_except($this->array, []);
    }

    public function benchInflateNestedKeys()
    {
        array_inflate($this->deflatedArray);
    }

    public function benchInflateNoNestedKeys()
    {
        array_inflate($this->array);
    }

    public function benchOnlyFew()
    {
        array_only($this->array, ['a', 'b', 'c', 'd']);
    }

    public function benchOnlyMany()
    {
        array_only($this->array, ['a', 'b', 'c', 'd', 'e', 'f']);
    }

    public function benchOnlyNone()
    {
        array_only($this->array, []);
    }

    public function benchRandomMultiple()
    {
        array_random($this->array, 5);
    }

    public function benchRandomSingle()
    {
        array_random($this->array);
    }

    public function init()
    {
        $this->array = array_combine(range('a', 'i'), range(1, 9));
        $this->nestedArray = [
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
        $this->deflatedArray = [
            'a' => 1,
            'b' => 2,
            'c.a' => 1,
            'c.b' => 2,
            'c.c.a' => 1,
            'c.c.b' => 2,
            'c.c.c' => 3,
        ];
    }
}
