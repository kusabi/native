<?php

namespace Kusabi\Native\Benchmarks\Functions\Strings;

use Kusabi\Native\Benchmarks\Bench;

class StringCipherCaesar extends Bench
{
    public function benchCipherCaesar1Character1Jump()
    {
        str_cipher_caesar('A', 1);
    }

    public function benchCipherCaesar1Character5Jump()
    {
        str_cipher_caesar('A', 5);
    }

    public function benchCipherCaesar5Character1Jump()
    {
        str_cipher_caesar('Hello', 1);
    }

    public function benchCipherCaesar5Character5Jump()
    {
        str_cipher_caesar('Hello', 5);
    }
}
