<?php

namespace Kusabi\Native\Benchmarks\Functions\Strings;

use Kusabi\Native\Benchmarks\Bench;

class StringCaseTitle extends Bench
{
    public function benchCaseTitle()
    {
        str_case_title('Turn this into title case');
    }
}
