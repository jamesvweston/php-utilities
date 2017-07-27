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
     * Get the value and if it's set, unset it
     * @param       array       $arr
     * @param       string      $key
     * @param       null        $default
     * @return      null
     */
    public static function getUnset (&$arr, $key, $default = null)
    {
        $value                  = isset($arr[$key]) ? $arr[$key] : $default;
        if (isset($arr[$key]))
            unset($arr[$key]);
        return $value;
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