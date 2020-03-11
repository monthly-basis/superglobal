<?php
namespace LeoGalleguillos\Superglobal\Model\Service\Cookie\PhpSessId;

/**
 * Cannot use 'Int' as class name as it is reserved. Use IntValue instead.
 */
class IntValue
{
    public function getIntValue(): int
    {
        /*
         * Get only 15 first characters of PHPSESSID.
         * Getting more characters may lead to int value returned by hexdec
         * which exceeds the max int value permitted by php.
         */
        $string = $_COOKIE['PHPSESSID'] ?? '';
        $string = substr($string, 0, 15);
        return hexdec($string);
    }
}
