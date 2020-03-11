<?php
namespace LeoGalleguillos\Superglobal\View\Helper\Cookie\PhpSessId;

use LeoGalleguillos\Superglobal\Model\Service as SuperglobalService;
use Zend\View\Helper\AbstractHelper;

class IntValue extends AbstractHelper
{
    public function __construct(
        SuperglobalService\Cookie\PhpSessId\intValue $intValueService
    ) {
        $this->intValueService = $intValueService;
    }

    public function __invoke(): int
    {
        return $this->intValueService->getIntValue();
    }
}
