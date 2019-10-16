<?php

namespace {

    use Personal\ImageHelpers;
    use SilverStripe\AssetAdmin\Forms\UploadField;
    use SilverStripe\Assets\Image;
    use SilverStripe\CMS\Model\SiteTree;
    use SilverStripe\Forms\CheckboxField;
    use SilverStripe\Forms\FieldGroup;

    /**
     * Class Page
     */
    class Page extends SiteTree
    {
        private static $db = [
            'ShowTitle' => 'Boolean'
        ];

        private static $defaults = [
            'ShowTitle' => 1
        ];


        public function getCMSFields()
        {
            $fields = parent::getCMSFields();
            $layout = FieldGroup::create(
                CheckboxField::create('ShowTitle', 'Display Title')
            )
                ->setTitle('Layout');
            $fields->addFieldToTab('Root.Main', $layout, 'Content');

            return $fields;
        }
    }
}
