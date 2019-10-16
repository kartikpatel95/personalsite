<?php
/**
 * Created by PhpStorm.
 * User: kartik
 * Date: 2019-10-16
 * Time: 18:44
 */

namespace Personal {

    use SilverStripe\Assets\Image;
    use SilverStripe\ORM\DataObject;
    use SilverStripe\AssetAdmin\Forms\UploadField;

    /**
     * Class PortfolioItems
     * @package Personal
     */
    class PortfolioItems extends DataObject {
        private static $table_name = "PortfolioItems";

        private static $db = [
          'SortID' => 'Int'
        ];

        private static $has_one = [
            'PortfolioArticle' => PortfolioArticlePage::class,
            'PortImages' => Image::class
        ];

        private static $owns = [
            'PortImages'
        ];

        public function getCMSFields()
        {
            $fields = parent::getCMSFields();
            $fields->removeFieldsFromTab('Root.Main', ['SortID', 'PortfolioArticleID']);
            $fields->addFieldToTab('Root.Main', $portfolio = UploadField::create('PortImages', 'Portfolio Images'));
            ImageHelpers::setImageDetails($portfolio, 'Portfolio');

            return $fields;
        }
    }
}