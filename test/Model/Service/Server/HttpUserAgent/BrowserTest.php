<?php
namespace MonthlyBasis\SuperglobalTest\Model\Service\Server\HttpUserAgent;

use MonthlyBasis\Superglobal\Model\Service as SuperglobalService;
use PHPUnit\Framework\TestCase;

class BrowserTest extends TestCase
{
    protected function setUp(): void
    {
        $this->browserService = new SuperglobalService\Server\HttpUserAgent\Browser();
    }

    public function testIsBrowser()
    {
        $this->expectError();

        unset($_SERVER['HTTP_USER_AGENT']);

        $this->assertFalse(
            $this->browserService->isBrowser()
        );

        $_SERVER['HTTP_USER_AGENT'] = 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)';
        $this->assertFalse(
            $this->browserService->isBrowser()
        );

        $_SERVER['HTTP_USER_AGENT'] = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36';
        $this->assertTrue(
            $this->browserService->isBrowser()
        );

        $_SERVER['HTTP_USER_AGENT'] = 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)';
        $this->assertFalse(
            $this->browserService->isBrowser()
        );

        $_SERVER['HTTP_USER_AGENT'] = 'Mozilla/5.0 (Android 4.4; Mobile; rv:41.0) Gecko/41.0 Firefox/41.0';
        $this->assertTrue(
            $this->browserService->isBrowser()
        );
    }
}
