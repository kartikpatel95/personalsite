<?php

namespace Personal {

    use SilverStripe\Forms\ListboxField;

    /**
     * Class PortfolioArticlePage
     * @package Personal
     */
    class PortfolioArticlePage extends \Page
    {
        private static $table_name = "PortfolioArticlePage";
        private static $description = "Portfolio Description";
        private static $icon_class = "font-icon-menu-files";
        private static $can_be_root = false;

        private static $many_many = [
          'Languages' => Language::class
        ];

        public function getCMSFields()
        {
            $fields = parent::getCMSFields();
            $fields->addFieldToTab('Root.Main',
                ListboxField::create('Languages', "Languages",
                    $this->getLanguageOptions()), 'Content');
            return $fields;
        }

        /**
         * @return \SilverStripe\ORM\Map
         */
        public function getLanguageOptions()
        {
            $language = Language::get()->map('ID', 'Name');
            return $language;
        }
    }
}
