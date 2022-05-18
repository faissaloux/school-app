<?php

if (!function_exists('transformData')) {
    function transformData($data, $transformer)
    {
        return fractal($data, $transformer)->toArray()['data'];
    }
}
