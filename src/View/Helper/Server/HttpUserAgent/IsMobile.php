<?php
namespace MonthlyBasis\Superglobal\View\Helper\Server\HttpUserAgent;

use MonthlyBasis\Superglobal\Model\Service as SuperglobalService;
use Zend\View\Helper\AbstractHelper;

class IsMobile extends AbstractHelper
{
    /**
     * Construct
     *
     * @param SuperglobalService\Server\HttpUserAgent\IsMobile $isMobileService
     */
    public function __construct(
        SuperglobalService\Server\HttpUserAgent\IsMobile $isMobileService
    ) {
        $this->isMobileService = $isMobileService;
    }

    /**
     * Invoke.
     *
     * @return bool
     */
    public function __invoke()
    {
        return $this->isMobileService->isMobile();
    }
}
