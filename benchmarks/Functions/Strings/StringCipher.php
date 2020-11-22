<?php

namespace Kusabi\Native\Benchmarks\Functions\Strings;

use Kusabi\Native\Benchmarks\Bench;

class StringCipher extends Bench
{
    public function benchCipherCaesar()
    {
        str_cipher_caesar('The quick brown fox jumps over the lazy dog', 5);
    }

    public function benchCipherCaesarReverse()
    {
        str_cipher_caesar_reverse('The quick brown fox jumps over the lazy dog', 5);
    }

    public function benchCipherMonoAlphabetic()
    {
        str_cipher_mono_alphabetic('What is this?', CIPHER_ENGLISH, CIPHER_ALBHED);
    }
}
