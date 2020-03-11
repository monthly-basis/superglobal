<?php
namespace LeoGalleguillos\SuperglobalTest\View\Helper\Server\HttpUserAgent;

use LeoGalleguillos\Superglobal\Model\Service as SuperglobalService;
use LeoGalleguillos\Superglobal\View\Helper as SuperglobalHelper;
use PHPUnit\Framework\TestCase;

class IntValueTest extends TestCase
{
    protected function setUp()
    {
        $this->intValueServiceMock = $this->createMock(
            SuperglobalService\Cookie\PhpSessId\IntValue::class
        );
        $this->intValueHelper = new SuperglobalHelper\Cookie\PhpSessId\IntValue(
            $this->intValueServiceMock
        );
    }

    public function testInvoke()
    {
        $intValue = rand(0, 99999);

        $this->intValueServiceMock
            ->method('getIntValue')
            ->willReturn($intValue);

        $this->assertSame(
            $intValue,
            $this->intValueHelper->__invoke()
        );
    }
}
