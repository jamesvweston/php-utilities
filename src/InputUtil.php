<?php

namespace jamesvweston\Utilities;


class InputUtil
{

    /**
     * @param   mixed       $param
     * @return  int|null
     */
    public static function getInt($param)
    {
        if (is_int($param))
            return $param;
        else if (ctype_digit($param))
            return (int)$param;
        return null;
    }

    /**
     * @param   mixed       $param
     * @return  float|null
     */
    public static function getFloat($param)
    {
        if (is_float($param))
            return $param;
        else if (!is_null(InputUtil::getInt($param)))
            return null;
        else if (is_numeric($param))
            return (float)$param;
        return null;
    }

    /**
     * Omits anything that is not a positive integer
     * @param   mixed       $param
     * @return  string|null
     */
    public static function getIdsString($param)
    {
        if (!is_null(InputUtil::getInt($param)))
            return (string)InputUtil::getInt($param);
        else if (InputUtil::getFloat($param))
            return null;
        else if (!is_string($param))
            return null;
        else if (empty(trim($param)))
            return null;

        $exploded               = explode(',', $param);
        $values                 = [];
        foreach ($exploded AS $item)
        {
            if (InputUtil::getInt(trim($item)))
                $values[]       = InputUtil::getInt(trim($item));
        }

        return implode(',', $values);
    }

}