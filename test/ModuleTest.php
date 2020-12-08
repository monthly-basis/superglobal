<?php
namespace LeoGalleguillos\SuperglobalTest;

use LeoGalleguillos\Superglobal\Module;
use MonthlyBasis\LaminasTest\ModuleTestCase;

class ModuleTest extends ModuleTestCase
{
    protected function setUp(): void
    {
        $this->module = new Module();
    }
}
