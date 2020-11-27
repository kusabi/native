<?php

namespace Kusabi\Native\Benchmarks\Functions\Strings;

use Kusabi\Native\Benchmarks\Bench;

class StringCasePascal extends Bench
{
    public function benchCasePascal()
    {
        str_case_pascal('Turn this into pascal case');
    }
}
