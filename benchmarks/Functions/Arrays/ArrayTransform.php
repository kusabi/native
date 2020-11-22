<?php

namespace Kusabi\Native\Benchmarks\Functions\Arrays;

use Kusabi\Native\Benchmarks\Bench;

/**
 * @BeforeMethods({"init"})
 */
class ArrayTransform extends Bench
{
    protected $array;

    public function benchExceptFew()
    {
        array_except($this->array, ['a', 'b', 'c', 'd']);
    }

    public function benchExceptMany()
    {
        array_except($this->array, ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k']);
    }

    public function benchExceptNone()
    {
        array_except($this->array, []);
    }

    public function benchOnlyFew()
    {
        array_only($this->array, ['a', 'b', 'c', 'd']);
    }

    public function benchOnlyMany()
    {
        array_only($this->array, ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k']);
    }

    public function benchOnlyNone()
    {
        array_only($this->array, []);
    }

    public function init()
    {
        $this->array = array_combine(range('a', 'z'), range(1, 26));
    }
}
