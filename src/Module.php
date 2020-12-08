<?php
namespace MonthlyBasis\Superglobal;

use MonthlyBasis\Superglobal\Model\Service as SuperglobalService;
use MonthlyBasis\Superglobal\View\Helper as SuperglobalHelper;

class Module
{
    public function getConfig()
    {
        return [
            'view_helpers' => [
                'aliases' => [
                    'isDeviceMobile'       => SuperglobalHelper\Server\HttpUserAgent\IsMobile::class,
                ],
                'factories' => [
                    SuperglobalHelper\Server\HttpUserAgent\IsMobile::class => function ($sm) {
                        return new SuperglobalHelper\Server\HttpUserAgent\IsMobile(
                            $sm->get(
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
                SuperglobalService\Get::class => function ($sm) {
                    return new SuperglobalService\Get();
                },
                SuperglobalService\Get\Page::class => function ($sm) {
                    return new SuperglobalService\Get\Page();
                },
                SuperglobalService\Server\HttpUserAgent\Bot::class => function ($sm) {
                    return new SuperglobalService\Server\HttpUserAgent\Bot();
                },
                /*
                 * @deprecated Use SuperglobalService\Server\HttpUserAgent\Bot
                 */
                SuperglobalService\Server\HttpUserAgent\Browser::class => function ($sm) {
                    return new SuperglobalService\Server\HttpUserAgent\Browser();
                },
                SuperglobalService\Server\HttpUserAgent\IsMobile::class => function ($sm) {
                    return new SuperglobalService\Server\HttpUserAgent\IsMobile();
                },
            ],
        ];
    }
}
