<?php

declare(strict_types=1);

if (!function_exists('hello_world')) {
    function hello_world(): string
    {
        return 'Hello, World!';
    }
}