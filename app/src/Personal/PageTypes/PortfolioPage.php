<?php

namespace Personal {

    use SilverStripe\AssetAdmin\Forms\UploadField;
    use SilverStripe\Assets\Image;

    /**
     * Class PortfolioPage
     * @package Personal
     */
    class PortfolioPage extends \Page
    {
        private static $table_name = 'PortfolioPage';
        private static $description = "Parent portfolio page";
        private static $icon_class = "font-icon-menu-campaigns";

        private static $has_one = [
            'Background' => Image::class
        ];

        private static $owns = [
            'Background'
        ];

        private static $allow_children = [
            PortfolioArticlePage::class
        ];

        public function getCMSFields()
        {
            $fields = parent::getCMSFields();

            $fields->addFieldToTab('Root.Main', $background = UploadField::create('Background'));
            $background->setFolderName('Backgrounds');
            $background->getValidator()->setAllowedExtensions(['png', 'jpeg', 'jpg', 'gif']);

            return $fields;
        }
    }
}
