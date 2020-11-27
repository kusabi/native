<?php

namespace Kusabi\Native\Benchmarks\Functions\Strings;

use Kusabi\Native\Benchmarks\Bench;

class StringCaseSentence extends Bench
{
    public function benchCaseSentence()
    {
        str_case_sentence('Turn this into sentence case');
    }
}
