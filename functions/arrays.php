<?php

if (!function_exists('array_deflate')) {
    /**
     * Flattens a nested array into a single level array.
     *
     * By default, it will keep the keys but use a dot notation to indicate depth.
     *
     * @param array $array
     * @param bool $keys
     *
     * @return array
     */
    function array_deflate(array $array, $keys = true)
    {
        $results = [];
        foreach ($array as $key => $value) {
            if (is_array($value)) {
                foreach (array_deflate($value) as $k => $v) {
                    $results[$key.'.'.$k] = $v;
                }
            } else {
                $results[$key] = $value;
            }
        }
        return $keys ? $results : array_values($results);
    }
}

if (!function_exists('array_except')) {
    /**
     * Return a subset of the array by passing in an array of keys to discard
     *
     * @param array $array
     * @param array $keys
     *
     * @return array
     */
    function array_except(array $array, array $keys)
    {
        return array_diff_key($array, array_flip($keys));
    }
}

if (!function_exists('array_exist')) {
    /**
     * Determine if a key exists in an array using dot notation for nested sets
     *
     * @param array $array
     * @param string $key
     *
     * @return bool
     */
    function array_exists(array $array, $key)
    {
        foreach (explode('.', $key) as $key) {
            if (!isset($array[$key])) {
                return false;
            }
            $array = &$array[$key];
        }
        return true;
    }
}

if (!function_exists('array_get')) {
    /**
     * Get a value from the array using dot notation for nested sets
     *
     * @param array $array
     * @param string $key
     * @param mixed $default
     *
     * @return mixed
     */
    function array_get(array $array, $key, $default = null)
    {
        foreach (explode('.', $key) as $key) {
            if (!isset($array[$key])) {
                return $default;
            }
            $array = &$array[$key];
        }
        return $array;
    }
}

if (!function_exists('array_inflate')) {
    /**
     * Expands a flattened array back into a nested array.
     *
     * This will not work on flattened arrays where the keys were not kept.
     *
     * @param array $array
     *
     * @return array
     */
    function array_inflate(array $array)
    {
        $results = [];
        foreach ($array as $key => $value) {
            array_set($results, $key, $value);
        }
        return $results;
    }
}

if (!function_exists('array_only')) {
    /**
     * Return a subset of the array by passing in an array of keys to keep
     *
     * @param array $array
     * @param array $keys
     *
     * @return array
     */
    function array_only(array $array, array $keys)
    {
        return array_intersect_key($array, array_flip($keys));
    }
}

if (!function_exists('array_set')) {
    /**
     * Set a value in the array using dot notation for nested sets
     *
     * @param array &$array
     * @param string $key
     * @param mixed $value
     *
     * @return void
     */
    function array_set(array &$array, $key, $value)
    {
        foreach (explode('.', $key) as $key) {
            if (!isset($array[$key])) {
                $array[$key] = [];
            }
            $array = &$array[$key];
        }
        $array = $value;
    }
}
