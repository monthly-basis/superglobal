<?php
namespace MonthlyBasis\Superglobal\Model\Service\Server\HttpUserAgent;

class Bot
{
    public function isBot(): bool
    {
        if (empty($_SERVER['HTTP_USER_AGENT'])) {
            return true;
        }

        $httpUserAgent = $_SERVER['HTTP_USER_AGENT'];

        if ((false !== stripos($httpUserAgent, 'bot'))
            || (false !== stripos($httpUserAgent, 'crawler'))
            || (false !== stripos($httpUserAgent, 'spider'))
        ) {
            return true;
        }

        if (get_browser($httpUserAgent)->browser == 'Default Browser') {
            return true;
        }

        return false;
    }
}
