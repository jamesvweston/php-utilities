<?php

namespace jamesvweston\Utilities;


class ArrayUtil
{

    /**
     * @param       $var
     * @param       null        $default
     * @return      null
     */
    public static function get (&$var, $default = null)
    {
        return isset($var) ? $var : $default;
    }

    /**
     * @param       $array
     * @param       $predicate
     * @return      bool
     */
    public static function all($array, $predicate)
    {
        return array_filter($array, $predicate) === $array;
    }

    /**
     * @param       $array
     * @return      bool
     */
    public static function isArrays($array)
    {
        return ArrayUtil::all($array, 'is_array');
    }
}