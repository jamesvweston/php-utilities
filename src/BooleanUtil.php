<?php

namespace jamesvweston\Utilities;


class BooleanUtil
{

    /**
     * @param   $param
     * @return  bool
     */
    public static function isTrue($param)
    {
        return $param === 'true'  || $param === true || $param === '1' || $param === 1 || $param === 'yes';
    }

    /**
     * @param   $param
     * @return  bool
     */
    public static function isFalse($param)
    {
        return $param === 'false'  || $param === false || $param === '0' || $param === 0 || $param === 'no';
    }

    /**
     * @param   mixed   $param
     * @return  bool|null
     */
    public static function getBooleanValue($param)
    {
        if (BooleanUtil::isTrue($param))
            return true;
        if (BooleanUtil::isFalse($param))
            return false;
        else
            return null;
    }

    /**
     * @param   mixed   $param
     * @return  string|null
     */
    public static function toString($param)
    {
        if (BooleanUtil::isTrue($param))
            return 'true';
        if (BooleanUtil::isFalse($param))
            return 'false';
        else
            return null;
    }
    
}