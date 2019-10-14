<?php

namespace Personal {

    use SilverStripe\AssetAdmin\Forms\UploadField;
    use SilverStripe\Assets\Image;
    use SilverStripe\Forms\ListboxField;
    use SilverStripe\Forms\TextField;

    /**
     * Class PortfolioArticlePage
     * @package Personal
     * @property string $Attribution
     */
    class PortfolioArticlePage extends \Page
    {
        private static $table_name = "PortfolioArticlePage";
        private static $description = "Portfolio Description";
        private static $icon_class = "font-icon-menu-files";
        private static $can_be_root = false;

        private static $db = [
            'Attribution' => 'Varchar'
        ];

        private static $has_many = [
            'PortImages' => Image::class
        ];

        private static $many_many = [
            'Languages' => Language::class
        ];

        private static $owns = [
            'PortImages'
        ];

        public function getCMSFields()
        {
            $fields = parent::getCMSFields();
            $fields->addFieldToTab('Root.Main',
                ListboxField::create('Languages', "Languages",
                    $this->getLanguageOptions()), 'Content');
            $fields->addFieldToTab('Root.Main', TextField::create('Attribution', 'Attribution'), 'Content');
            $fields->addFieldToTab('Root.Images', $portfolio = UploadField::create('PortImages', 'Portfolio Images'));
            ImageHelpers::setImageDetails($portfolio, 'Portfolio');

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
