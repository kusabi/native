<?php

namespace Kusabi\Native\Benchmarks\Functions\Strings;

use Kusabi\Native\Benchmarks\Bench;

class StringCaseSnake extends Bench
{
    public function benchCaseSnake()
    {
        str_case_snake('Turn this into snake case');
    }
}
