<?php
namespace LeoGalleguillos\SuperglobalTest\View\Helper\Server\HttpUserAgent;

use LeoGalleguillos\Superglobal\Model\Service as SuperglobalService;
use LeoGalleguillos\Superglobal\View\Helper as SuperglobalHelper;
use PHPUnit\Framework\TestCase;

class IsMobileTest extends TestCase
{
    protected function setUp()
    {
        $this->isMobileServiceMock = $this->createMock(
            SuperglobalService\Server\HttpUserAgent\IsMobile::class
        );
        $this->isMobileHelper = new SuperglobalHelper\Server\HttpUserAgent\IsMobile(
            $this->isMobileServiceMock
        );
    }

    public function testInitialize()
    {
        $this->assertInstanceOf(
            SuperglobalHelper\Server\HttpUserAgent\IsMobile::class,
            $this->isMobileHelper
        );
    }

    public function testIsMobile()
    {
        $this->isMobileServiceMock->method('isMobile')->will(
            $this->onConsecutiveCalls(true, false, false, true)
        );

        $this->assertTrue(
            $this->isMobileHelper->__invoke()
        );

        $this->assertFalse(
            $this->isMobileHelper->__invoke()
        );

        $this->assertFalse(
            $this->isMobileHelper->__invoke()
        );

        $this->assertTrue(
            $this->isMobileHelper->__invoke()
        );
    }
}
