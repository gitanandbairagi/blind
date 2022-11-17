<?php
// Custom Helper Function

if (!function_exists('custom_print')) {
    function custom_print($value, $die = true) {
        echo "<pre>";
        echo print_r($value);
        if ($die == true) {
            die;
        }
    }
}