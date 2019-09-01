<?php
/**
 * Created by PhpStorm.
 * User: kartik
 * Date: 2019-09-01
 * Time: 18:37
 */

namespace Personal {

    use gorriecoe\Link\Models\Link;
    use gorriecoe\LinkField\LinkField;
    use SilverStripe\Forms\RequiredFields;
    use SilverStripe\Forms\TextField;
    use SilverStripe\ORM\DataObject;
    use SilverStripe\ORM\FieldType\DBHTMLText;
    use SilverStripe\SiteConfig\SiteConfig;
    use SilverStripe\View\Requirements;

    /**
     * Class SocialMedia
     * @package Personal
     * @property string $Icon
     * @property int $SortID
     */
    class SocialMedia extends DataObject {
        private static $table_name = "SocialMedia";
        private static $db = [
            'Icon' => 'Varchar(64)',
            'SortID' => 'Int'
        ];

        private static $has_one = [
            'Social' => Link::class,
            'SiteConfig' => SiteConfig::class
        ];

        private static $summary_fields = [
            'Social.Title' => 'Title',
            'getSocialSummaryIcon' => 'Social Icon'
        ];


        public function getCMSFields()
        {
            $fields = parent::getCMSFields();
            $fields->removeFieldsFromTab('Root.Main', ['SiteConfigID', 'SortID', 'SocialID']);
            $fields->addFieldToTab('Root.Main', TextField::create('Icon', 'Icons')
                ->setDescription('Click here to get font icons <a href="https://fontawesome.com/">Font Awesome Icons</a>'),
                'SocialID');
            $fields->addFieldToTab('Root.Main', LinkField::create('Social', 'Social Link', $this));

            return $fields;
        }

        public function getCMSValidator(){
            return RequiredFields::create(
                'Icon'
            );
        }

        /**
         * @return DBHTMLText
         */
        public function getSocialSummaryIcon(){
            Requirements::css("https://use.fontawesome.com/releases/v5.8.2/css/all.css");
            $result =  new DBHTMLText('Icon');
            $result->setValue('<i class="summaryIcon ' .$this->Icon .'"></i>');
            return $result;
        }
    }
}