<?php

namespace Personal {

    /**
     * Class PortfolioPage
     * @package Personal
     */
    class PortfolioPage extends \Page
    {
        private static $table_name = 'PortfolioPage';
        private static $description = "Parent portfolio page";
        private static $icon_class = "font-icon-menu-campaigns";

        private static $allow_children = [
            PortfolioArticlePage::class
        ];

        public function getCMSFields()
        {
            $fields = parent::getCMSFields();
            return $fields;
        }
    }
}
