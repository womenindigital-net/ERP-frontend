<?php

if (!function_exists('prepareInputLabel')) {
    function prepareInputLabel($str): string
    {
        return ucwords(rtrim(str_replace('_', ' ', $str), '_id'));
    }
}
