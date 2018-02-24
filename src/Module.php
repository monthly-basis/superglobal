<?php
namespace LeoGalleguillos\Superglobal;

use LeoGalleguillos\Superglobal\Model\Service as SuperglobalService;
use LeoGalleguillos\Superglobal\View\Helper as SuperglobalHelper;

class Module
{
    public function getConfig()
    {
        return [
            'view_helpers' => [
                'aliases' => [
                    'isMobile' => SuperglobalHelper\Server\HttpUserAgent\IsMobile::class,
                ],
                'factories' => [
                    SuperglobalHelper\Server\HttpUserAgent\IsMobile::class => function ($serviceManager) {
                        return new SuperglobalHelper\Server\HttpUserAgent\IsMobile(
                            $serviceManager->get(
                                SuperglobalService\Server\HttpUserAgent\IsMobile::class
                            )
                        );
                    },
                ],
            ],
        ];
    }

    public function getServiceConfig()
    {
        return [
            'factories' => [
                SuperglobalService\Server\HttpUserAgent\IsMobile::class => function ($serviceManager) {
                    return new SuperglobalService\Server\HttpUserAgent\IsMobile();
                },
            ],
        ];
    }
}
