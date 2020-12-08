<?php
namespace MonthlyBasis\SuperglobalTest;

use MonthlyBasis\Superglobal\Module;
use MonthlyBasis\LaminasTest\ModuleTestCase;

class ModuleTest extends ModuleTestCase
{
    protected function setUp(): void
    {
        $this->module = new Module();
    }
}
