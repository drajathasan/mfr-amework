<?php

function baseUrl($_str_custom_url = '')
{
    global $base;
    return $base['config']['url'].$_str_custom_url;
}

function getBaseConfig()
{
    global $base;
    // new class
    $config = new stdClass();
    foreach ($base['config'] as $key => $value) {
        $config->{$key} = $value;
    }
    // set out
    return $config;
}