<?php

if (!function_exists('base_path')) {
    function base_path($path = '') {
        return __DIR__ . '/..//' . ($path ? DIRECTORY_SEPARATOR . $path : $path);
    }
}

if (!function_exists('uploads_path')) {
    function uploads_path($path = '') {
        return base_path('storage/uploads/' . $path);
    }
}
