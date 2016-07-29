<?php

namespace jamesvweston\Utilities;


class StringUtil
{

    /**
     * @param   string      $search
     * @param   string      $string
     * @return  bool
     */
    public static function contains($search, $string)
    {
        return preg_match('/' . $search . '/', $string);
    }
    
}