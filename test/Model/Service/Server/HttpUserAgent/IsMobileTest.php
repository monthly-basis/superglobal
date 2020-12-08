<?php
namespace MonthlyBasis\SuperglobalTest\Model\Service\Server\HttpUserAgent;

use MonthlyBasis\Superglobal\Model\Service as SuperglobalService;
use PHPUnit\Framework\TestCase;

class IsMobileTest extends TestCase
{
    protected function setUp(): void
    {
        $this->isMobileService = new SuperglobalService\Server\HttpUserAgent\IsMobile();
    }

    public function testInitialize()
    {
        $this->assertInstanceOf(
            SuperglobalService\Server\HttpUserAgent\IsMobile::class,
            $this->isMobileService
        );
    }

    public function testIsMobile()
    {
        $this->isMobileService = new SuperglobalService\Server\HttpUserAgent\IsMobile();
        unset($_SERVER['HTTP_USER_AGENT']);
        $this->assertFalse(
            $this->isMobileService->isMobile()
        );

        $this->isMobileService = new SuperglobalService\Server\HttpUserAgent\IsMobile();
        $_SERVER['HTTP_USER_AGENT'] = 'chrome';
        $this->assertFalse(
            $this->isMobileService->isMobile()
        );

        $this->isMobileService = new SuperglobalService\Server\HttpUserAgent\IsMobile();
        $_SERVER['HTTP_USER_AGENT'] = 'iphone';
        $this->assertTrue(
            $this->isMobileService->isMobile()
        );
    }
}
