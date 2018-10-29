<?php
namespace LeoGalleguillos\Superglobal\Model\Service\Server\HttpUserAgent;

class Browser
{
    /**
     * Is browser.
     *
     * @return bool
     */
    public function isBrowser(): bool
    {
        $httpUserAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';

        $pattern = '/bot/i';
        if (preg_match($pattern, $httpUserAgent)) {
            return false;
        }

        $pattern = '/Chrome|Chromium|Firefox|MSIE|Opera|OPR|Seamonkey|Safari/i';
        if (preg_match($pattern, $httpUserAgent)) {
            return true;
        }

        return false;
    }
}
