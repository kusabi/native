<?php

if (!defined('CIPHER_ALBHED')) {
    define('CIPHER_ALBHED', 'ypltavkrezgmshubxncdijfqowYPLTAVKREZGMSHUBXNCDIJFQOW');
}

if (!defined('CIPHER_ENGLISH')) {
    define('CIPHER_ENGLISH', 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ');
}

if (!defined('CIPHER_INVERT')) {
    define('CIPHER_INVERT', 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz');
}

if (!function_exists('str_cipher_caesar')) {
    /**
     * Shift the characters of a string up the alphabet
     *
     * @param string $string
     * @param int $shift
     *
     * @return string
     */
    function str_cipher_caesar($string, $shift)
    {
        $result = '';
        foreach (str_split($string) as $ch) {
            $ord = ord($ch);
            if ($ord >= 65 && $ord <= 122) {
                if ($ord <= 90) {
                    $offset = 65;
                } elseif ($ord >= 97) {
                    $offset = 97;
                } else {
                    $result .= $ch;
                    continue;
                }
            } else {
                $result .= $ch;
                continue;
            }
            $shifted = ($ord - $offset + $shift) % 26;
            $result .= chr(($shifted < 0 ? 26 + $shifted : $shifted) + $offset);
        }
        return $result;
    }
}

if (!function_exists('str_cipher_caesar_reverse')) {
    /**
     * Shift the characters of a string down the alphabet
     *
     * @param string $input
     * @param int $shift
     *
     * @return string
     */
    function str_cipher_caesar_reverse($input, $shift)
    {
        return str_cipher_caesar($input, 26 - $shift);
    }
}

if (!function_exists('str_cipher_mono_alphabetic')) {
    /**
     * Substitute characters with those from another alphabet
     *
     * @param string $input
     * @param string $alpha
     * @param string $beta
     *
     * @return string
     */
    function str_cipher_mono_alphabetic($input, $alpha, $beta)
    {
        $result = '';
        foreach (str_split($input) as $ch) {
            if (($loc = strpos($alpha, $ch)) !== false) {
                $result .= $beta[$loc];
            } else {
                $result .= $ch;
            }
        }
        return $result;
    }
}


if (!function_exists('str_case_camel')) {
    /**
     * Convert a string to camelCase
     *
     * @param string $string
     *
     * @return string
     */
    function str_case_camel($string)
    {
        preg_match_all('!([A-Za-z][A-Z0-9]*(?=$|[A-Z][a-z0-9])|[A-Za-z][a-z0-9]+)!', $string, $matches);
        return lcfirst(str_replace('_', '', ucwords(strtolower(implode('_', $matches[0])), '_')));
    }
}

if (!function_exists('str_case_kebab')) {
    /**
     * Convert a string to kebab-case
     *
     * @param string $string
     *
     * @return string
     */
    function str_case_kebab($string)
    {
        preg_match_all('!([A-Za-z][A-Z0-9]*(?=$|[A-Z][a-z0-9])|[A-Za-z][a-z0-9]+)!', $string, $matches);
        return strtolower(implode('-', $matches[0]));
    }
}

if (!function_exists('str_case_pascal')) {
    /**
     * Convert a string to PascalCase
     *
     * @param string $string
     *
     * @return string
     */
    function str_case_pascal($string)
    {
        preg_match_all('!([A-Za-z][A-Z0-9]*(?=$|[A-Z][a-z0-9])|[A-Za-z][a-z0-9]+)!', $string, $matches);
        return str_replace('_', '', ucwords(strtolower(implode('_', $matches[0])), '_'));
    }
}

if (!function_exists('str_case_sentence')) {
    /**
     * Convert a string to Sentence case
     *
     * @param string $string
     *
     * @return string
     */
    function str_case_sentence($string)
    {
        preg_match_all('!([A-Za-z][A-Z0-9]*(?=$|[A-Z][a-z0-9])|[A-Za-z][a-z0-9]+)!', $string, $matches);
        return ucfirst(strtolower(implode(' ', $matches[0])));
    }
}

if (!function_exists('str_case_snake')) {
    /**
     * Convert a string to snake_case
     *
     * @param string $string
     *
     * @return string
     */
    function str_case_snake($string)
    {
        preg_match_all('!([A-Za-z][A-Z0-9]*(?=$|[A-Z][a-z0-9])|[A-Za-z][a-z0-9]+)!', $string, $matches);
        return strtolower(implode('_', $matches[0]));
    }
}

if (!function_exists('str_case_title')) {
    /**
     * Convert a string to Title Case
     *
     * @param string $string
     *
     * @return string
     */
    function str_case_title($string)
    {
        preg_match_all('!([A-Za-z][A-Z0-9]*(?=$|[A-Z][a-z0-9])|[A-Za-z][a-z0-9]+)!', $string, $matches);
        return ucwords(strtolower(implode(' ', $matches[0])));
    }
}

if (!function_exists('str_slug')) {
    /**
     * Convert a string to slug
     *
     * @param string $string
     *
     * @return string
     */
    function str_slug($string)
    {
        return str_case_kebab($string);
    }
}

if (!function_exists('str_contains')) {
    /**
     * @param string $haystack
     * @param string $needle
     *
     * @return bool
     */
    function str_contains($haystack, $needle)
    {
        return $needle === '' || strpos($haystack, $needle) !== false;
    }
}

if (!function_exists('str_ends_with')) {
    /**
     * @param string $haystack
     * @param string $needle
     *
     * @return bool
     */
    function str_ends_with($haystack, $needle)
    {
        $length = strlen($needle);
        return $needle === '' || substr($haystack, -$length, $length) === $needle;
    }
}

if (!function_exists('str_starts_with')) {
    /**
     * @param string $haystack
     * @param string $needle
     *
     * @return bool
     */
    function str_starts_with($haystack, $needle)
    {
        return $needle === '' || strpos($haystack, $needle) === 0;
    }
}