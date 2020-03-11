<?php
namespace LeoGalleguillos\SuperglobalTest\Model\Service\Cookie\PhpSessId;

use LeoGalleguillos\Superglobal\Model\Service as SuperglobalService;
use PHPUnit\Framework\TestCase;

class IntValueTest extends TestCase
{
    protected function setUp()
    {
        $this->intValueService = new SuperglobalService\Cookie\PhpSessId\IntValue();
    }

    public function testGetIntValue_noPhpSessIdIsSet_0()
    {
        unset($_COOKIE);
        $this->assertSame(
            0,
            $this->intValueService->getIntValue()
        );

        $_COOKIE = [];
        $this->assertSame(
            0,
            $this->intValueService->getIntValue()
        );

        $_COOKIE['PHPSESSID'] = null;
        $this->assertSame(
            0,
            $this->intValueService->getIntValue()
        );
    }

    public function testGetIntValue_phpSessIdIsHash_appropriateIntValue()
    {
        $_COOKIE['PHPSESSID'] = '';
        $this->assertSame(
            0,
            $this->intValueService->getIntValue()
        );

        $_COOKIE['PHPSESSID'] = '123';
        $this->assertSame(
            291,
            $this->intValueService->getIntValue()
        );

        $_COOKIE['PHPSESSID'] = 'abcdefg';
        $this->assertSame(
            11259375,
            $this->intValueService->getIntValue()
        );

        $_COOKIE['PHPSESSID'] = 'k84cciu1phufto8lntoul23h03';
        $this->assertSame(
            139248120,
            $this->intValueService->getIntValue()
        );

        $_COOKIE['PHPSESSID'] = 'v15j5n8bufd1pbdnbfk9argh41';
        $this->assertSame(
            91683279293,
            $this->intValueService->getIntValue()
        );

        $_COOKIE['PHPSESSID'] = 'd4c9877ag2ppo7ogt8jqmrcp42';
        $this->assertSame(
            913914165799,
            $this->intValueService->getIntValue()
        );

        $_COOKIE['PHPSESSID'] = 'ffffffffffffffffffffffffff';
        $this->assertSame(
            1152921504606846975,
            $this->intValueService->getIntValue()
        );

        $_COOKIE['PHPSESSID'] = 'fffffffffffffffffffffffffffffffffffffffffffff';
        $this->assertSame(
            1152921504606846975,
            $this->intValueService->getIntValue()
        );
    }
}
