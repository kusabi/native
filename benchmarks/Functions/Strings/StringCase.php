<?php

namespace Kusabi\Native\Benchmarks\Functions\Strings;

use Kusabi\Native\Benchmarks\Bench;

class StringCase extends Bench
{
    public function benchCaseCamel()
    {
        str_case_camel('Turn this into camel case');
    }

    public function benchCaseKebab()
    {
        str_case_kebab('Turn this into kebab case');
    }

    public function benchCasePascal()
    {
        str_case_pascal('Turn this into pascal case');
    }

    public function benchCaseSentence()
    {
        str_case_sentence('Turn this into sentence case');
    }

    public function benchCaseSnake()
    {
        str_case_snake('Turn this into snake case');
    }

    public function benchCaseTitle()
    {
        str_case_title('Turn this into title case');
    }
}
