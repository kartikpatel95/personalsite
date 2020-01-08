<?php
/**
 * Created by PhpStorm.
 * User: kartik
 * Date: 2019-09-01
 * Time: 18:21
 */
namespace Personal {

    use SilverStripe\AssetAdmin\Forms\UploadField;
    use SilverStripe\Assets\File;
    use SilverStripe\Assets\Image;
    use SilverStripe\Forms\DateField;
    use SilverStripe\Forms\EmailField;
    use SilverStripe\Forms\FieldList;
    use SilverStripe\Forms\GridField\GridField;
    use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
    use SilverStripe\Forms\TextareaField;
    use SilverStripe\Forms\TextField;
    use SilverStripe\ORM\DataExtension;
    use UndefinedOffset\SortableGridField\Forms\GridFieldSortableRows;

    /**
     * Class CustomSiteConfig_Extensions
     * @package Personal
     */
    class CustomSiteConfig_Extensions extends DataExtension {
        private static $db = [];

        private static $has_one = [
            'CV' => File::class,
            'SiteLogo' => File::class,
            'SiteBackground' => Image::class
        ];

        private static $owns = [
            'CV',
            'SiteLogo',
            'SiteBackground'
        ];

        private static $has_many = [
            'Social' => SocialMedia::class
        ];

        public function updateCMSFields(FieldList $fields)
        {
            $fields->addFieldToTab('Root.Main', $logo = UploadField::create('SiteLogo'));
            ImageHelpers::setImageDetails($logo, 'Logos');

            $fields->addFieldToTab('Root.Main',
                $background = UploadField::create('SiteBackground'));
                ImageHelpers::setImageDetails($background, 'Backgrounds');

            $fields->addFieldToTab('Root.Main', $cv = UploadField::create('CV'));
            $cv->setFolderName('Documents');

            $fields->addFieldToTab('Root.SocialIcons', $this->getSocialGridIcons());
        }

        /**
         * @return GridField
         */
        public function getSocialGridIcons(){
            $socialGrid = GridField::create(
              'Social', 'Social', $this->getOwner()->Social(), GridFieldConfig_RecordEditor::create()
            );
            $socialGrid->getConfig()->addComponent(new GridFieldSortableRows('SortID'));
            return $socialGrid;
        }
    }
}
