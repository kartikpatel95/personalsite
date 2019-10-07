<?php

namespace Personal {

    use SilverStripe\ORM\PaginatedList;

    /**
     * Class PortfolioPageController
     * @package Personal
     */
    class PortfolioPageController extends \PageController
    {

        /**
         * @return PaginatedList
         */
        public function getPageArticles()
        {
            $pages = PortfolioArticlePage::get()->filter(['ParentID' => $this->ID]);
            $paginatedPages = PaginatedList::create($pages, $this->getRequest());
            $paginatedPages->setPageLength(9);
            return $paginatedPages;
        }
    }
}
