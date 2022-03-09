<?php

function get_value(&$value)
{

    return isset($value) && !empty($value) && $value ? $value : false;

}