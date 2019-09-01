<?php
/**
 * Created by PhpStorm.
 * User: kartik
 * Date: 2019-09-01
 * Time: 18:21
 */

namespace Personal {

    use SilverStripe\Forms\DateField;
    use SilverStripe\Forms\EmailField;
    use SilverStripe\Forms\FieldList;
    use SilverStripe\Forms\TextareaField;
    use SilverStripe\Forms\TextField;
    use SilverStripe\ORM\DataExtension;

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

        public function updateCMSFields(FieldList $fields)
        {
            $fields->addFieldsToTab('Root.Main', [
                TextField::create('Position', 'Work Position'),
                TextField::create('PhoneNumber', 'Phone Number'),
                EmailField::create('Email', 'Email Address'),
                TextareaField::create('Address', 'Physical Address'),
                DateField::create('DateOfBirth', 'Date of Birth')
            ]);
        }
    }
}