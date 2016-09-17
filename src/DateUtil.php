<?php

namespace jamesvweston\Utilities;


class DateUtil
{

    /**
     * @param   string      $format     eg YYYY-MM-DD
     * @param   string      $date
     * @return  bool
     */
    public static function validate($format, $date)
    {
        if (!is_string($date))
            return false;

        if ($format == 'YYYY-MM-DD')
        {
            if (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $date))
                return true;
            else
                return false;
        }
        return false;
    }

}