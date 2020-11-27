<?php

namespace Kusabi\Native\Benchmarks\Functions\Strings;

use Kusabi\Native\Benchmarks\Bench;

class StringCaseKebab extends Bench
{
    public function benchCaseKebab()
    {
        str_case_kebab('Turn this into kebab case');
    }
}
