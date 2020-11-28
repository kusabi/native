<?php

if (!function_exists('class_uses_recursive')) {
    /**
     * Determine if an object uses a trait
     *
     * @param string $class
     * @param bool $autoload
     *
     * @return string[]
     */
    function class_uses_recursive($class, $autoload = true)
    {
        $traits = class_uses($class, $autoload);
        foreach (array_merge(class_parents($class), $traits) as $parent) {
            $traits += class_uses_recursive($parent, $autoload);
        }
        return $traits;
    }
}

if (!function_exists('class_uses_trait')) {
    /**
     * Does a class use a trait?
     *
     * @param string $class
     * @param string $trait
     * @param bool $recursive
     * @param bool $autoload
     *
     * @return bool
     */
    function class_uses_trait($class, $trait, $recursive = false, $autoload = true)
    {
        $traits = $recursive ? class_uses_recursive($class, $autoload) : class_uses($class, $autoload);
        return isset($traits[$trait]);
    }
}
