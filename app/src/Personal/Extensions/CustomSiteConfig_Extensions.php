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
     * @property string $Position
     * @property string $PhoneNumber
     * @property string $Email
     * @property string $Address
     * @property Date $DateOfBirth
     */
    class CustomSiteConfig_Extensions extends DataExtension {
        private static $db = [
            "Position" => 'Varchar(128)',
            'PhoneNumber' => 'Varchar(64)',
            'Email' => 'Varchar(256)',
            'Address' => 'Text',
            'DateOfBirth' => 'Date'
        ];

        private static $has_one = [
            'Profile' => Image::class,
            'CV' => File::class,
            'SiteLogo' => File::class,
            'SiteBackground' => Image::class
        ];

        private static $owns = [
            'Profile',
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


            $fields->addFieldsToTab('Root.Main', [
                TextField::create('Position', 'Work Position'),
                TextField::create('PhoneNumber', 'Phone Number'),
                EmailField::create('Email', 'Email Address'),
                TextareaField::create('Address', 'Physical Address'),
                DateField::create('DateOfBirth', 'Date of Birth')
            ]);

            $fields->addFieldToTab('Root.Main', $profile = UploadField::create('Profile'));
            $profile->setFolderName('ProfileImage');
            $profile->getValidator()->setAllowedExtensions(['png', 'jpeg', 'jpg', 'gif']);

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
