<?php
namespace LeoGalleguillos\SuperglobalTest\Model\Service\Server\HttpUserAgent;

use LeoGalleguillos\Superglobal\Model\Service as SuperglobalService;
use PHPUnit\Framework\TestCase;

class IsMobileTest extends TestCase
{
    protected function setUp()
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
}
