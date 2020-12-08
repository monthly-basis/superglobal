<?php
namespace MonthlyBasis\Superglobal\Model\Service;

class Get
{
    /**
     * @deprecated Use Service\Get\Page::getPage() instead
     */
    public function getPage()
    {
        if (isset($_GET['page'])) {
            $page = (int) $_GET['page'];
            return ($page > 0) ? $page : 1;
        }

        return 1;
    }
}
