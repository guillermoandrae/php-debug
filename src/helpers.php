<?php

if (!function_exists('dump')) {
    function dump(...$expression)
    {
        $args = func_get_args();
        if (PHP_SAPI != 'cli') {
            echo '<pre>';
        }
        foreach ($args as $arg) {
            var_dump($arg);
        }
        if (PHP_SAPI != 'cli') {
            echo '</pre>';
        }
    }
}

if (!function_exists('dd')) {
    function dd(...$expression)
    {
        dump($expression);
        die(1);
    }
}
