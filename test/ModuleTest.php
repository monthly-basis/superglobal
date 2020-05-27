<?php
namespace LeoGalleguillos\SuperglobalTest;

use LeoGalleguillos\Superglobal\Module;
use LeoGalleguillos\Test\ModuleTestCase;

class ModuleTest extends ModuleTestCase
{
    protected function setUp(): void
    {
        $this->module = new Module();
    }
}
