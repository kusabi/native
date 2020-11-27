<?php

namespace Kusabi\Native\Benchmarks\Functions\Strings;

use Kusabi\Native\Benchmarks\Bench;

class StringCaseCamel extends Bench
{
    public function benchCaseCamel()
    {
        str_case_camel('Turn this into camel case');
    }
}
