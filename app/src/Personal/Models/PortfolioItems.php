<?php

/**
 * Created by PhpStorm.
 * User: kartik
 * Date: 2019-10-16
 * Time: 18:44
 */

namespace Personal {

    use SilverStripe\Assets\Image;
    use SilverStripe\Dev\Debug;
    use SilverStripe\ORM\DataObject;
    use SilverStripe\AssetAdmin\Forms\UploadField;

    /**
     * Class PortfolioItems
     * @package Personal
     */
    class PortfolioItems extends DataObject
    {
        private static $table_name = "PortfolioItems";

        private static $db = [
            'SortID' => 'Int'
        ];

        private static $has_one = [
            'PortfolioArticle' => PortfolioArticlePage::class,
            'PortImages' => Image::class
        ];

        private static $summary_fields = [
            'PortImages.Title' => 'Title',
            'getImageIcon' => 'Image'
        ];

        private static $searchable_fields = [
            'PortImages.Title'
        ];

        private static $owns = [
            'PortImages'
        ];

        public function getCMSFields()
        {
            $fields = parent::getCMSFields();
            $fields->removeFieldsFromTab('Root.Main', ['SortID', 'PortfolioArticleID']);
            $fields->addFieldToTab('Root.Main', $portfolio = UploadField::create('PortImages', 'Portfolio Images'));
            ImageHelpers::setImageDetails($portfolio, 'Portfolio/'. $this->getArticlePageTitle());

            return $fields;
        }

        /**
         * @return string
         */
        public function getArticlePageTitle(){
            $pages = PortfolioArticlePage::get()->byID($this->PortfolioArticleID);
            return $pages->Title;
        }

        public function getImageIcon()
        {
            if ($this->PortImages()->ID) {
                return $this->PortImages->ScaleWidth(150);
            } else {
                return '(No-Image)';
            }
        }
    }
}
