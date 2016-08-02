<?php

namespace jamesvweston\Utilities;


class OAuthUtil
{

    /**
     * Example value in $headers:   ['Authorization' => 'Bearer TOKEN_GOES_HERE'];
     * @param   array       $headers
     * @param   string      $key
     * @param   string      $tokenType
     * @param   string      $separator
     * @return  string|null
     */
    public static function getAccessToken($headers, $key = 'Authorization', $tokenType = 'Bearer', $separator = ' ')
    {
        $value              = ArrayUtil::get($headers[strtolower($key)]);

        if (is_null($value))
            return null;

        if (!is_array($value))
            return null;

        if (sizeof($value) != 1)
            return null;


        $tokenString        = $value[0];

        $tokenArray         = explode($tokenType . $separator, $tokenString);

        if (sizeof($tokenArray) != 2)
            return null;

        return $tokenArray[1];
    }
    
}