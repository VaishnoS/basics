<?php
if (!function_exists('p')) {
    function p($data)
    {
        echo "<pre>";
        print_r($data);
    }
}

if (!function_exists('pd')) {
    function pd($data)
    {
        echo "<pre>";
        print_r($data);
        die();
    }
}
