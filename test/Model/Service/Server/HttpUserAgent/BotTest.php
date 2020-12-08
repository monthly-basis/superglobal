<?php
namespace MonthlyBasis\SuperglobalTest\Model\Service\Server\HttpUserAgent;

use MonthlyBasis\Superglobal\Model\Service as SuperglobalService;
use PHPUnit\Framework\TestCase;

class BotTest extends TestCase
{
    protected function setUp(): void
    {
        $this->botService = new SuperglobalService\Server\HttpUserAgent\Bot();
    }

    public function test_isBot()
    {
        unset($_SERVER['HTTP_USER_AGENT']);
        $this->assertTrue(
            $this->botService->isBot()
        );

        $_SERVER['HTTP_USER_AGENT'] = 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)';
        $this->assertTrue(
            $this->botService->isBot()
        );

        $_SERVER['HTTP_USER_AGENT'] = 'Mozilla/5.0 (iPhone; CPU iPhone OS 7_0 like Mac OS X) AppleWebKit/537.51.1 (KHTML, like Gecko) Version/7.0 Mobile/11A465 Safari/9537.53 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)';
        $this->assertTrue(
            $this->botService->isBot()
        );

        $_SERVER['HTTP_USER_AGENT'] = 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)';
        $this->assertTrue(
            $this->botService->isBot()
        );

        $_SERVER['HTTP_USER_AGENT'] = 'Mozilla/5.0 (compatible; BLEXBot/1.0; +http://webmeup-crawler.com/)';
        $this->assertTrue(
            $this->botService->isBot()
        );

        $_SERVER['HTTP_USER_AGENT'] = 'Sogou web spider/4.0(+http://www.sogou.com/docs/help/webmasters.htm#07)';
        $this->assertTrue(
            $this->botService->isBot()
        );

        $_SERVER['HTTP_USER_AGENT'] = 'Mozilla/5.0 (Linux; U; Android 8.1.0; TECNO LA7 Pro Build/O11019; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/81.0.4044.138 Mobile Safari/537.36 OPR/47.0.2254.146760';
        $this->assertFalse(
            $this->botService->isBot()
        );

        $_SERVER['HTTP_USER_AGENT'] = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.61 Safari/537.36 Edg/83.0.478.37';
        $this->assertFalse(
            $this->botService->isBot()
        );

        $_SERVER['HTTP_USER_AGENT'] = 'Mozilla/5.0 (Android 4.4; Mobile; rv:41.0) Gecko/41.0 Firefox/41.0';
        $this->assertFalse(
            $this->botService->isBot()
        );
    }
}
