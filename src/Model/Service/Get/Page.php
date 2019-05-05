<?php
namespace LeoGalleguillos\Superglobal\Model\Service\Get;

class Page
{
    public function getPage()
    {
        if (isset($_GET['page'])) {
            $page = (int) $_GET['page'];
            return ($page > 0) ? $page : 1;
        }

        return 1;
    }
}
