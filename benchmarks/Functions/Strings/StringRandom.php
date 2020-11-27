<?php

namespace Kusabi\Native\Benchmarks\Functions\Strings;

use Kusabi\Native\Benchmarks\Bench;

class StringRandom extends Bench
{
    public function benchRandomShort()
    {
        str_random(5);
    }

    public function benchRandomLong()
    {
        str_random(100);
    }
}
