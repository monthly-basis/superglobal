<?php
namespace Superglobal\Model\Service;

class Server
{
    public function isHttpUserAgentFromFacebook()
    {
        return (preg_match('/facebookexternalhit/', $_SERVER['HTTP_USER_AGENT'])
            || preg_match('/Facebot/', $_SERVER['HTTP_USER_AGENT'])
        );
    }
}
