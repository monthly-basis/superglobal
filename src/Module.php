<?php
namespace LeoGalleguillos\Superglobal;

use LeoGalleguillos\Superglobal\Model\Service as SuperglobalService;

class Module
{
    public function getConfig()
    {
        return [
            'view_helpers' => [
                'aliases' => [
                ],
                'factories' => [
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
