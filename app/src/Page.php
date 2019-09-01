<?php

namespace {

    use SilverStripe\CMS\Model\SiteTree;
    use SilverStripe\Forms\CheckboxField;
    use SilverStripe\Forms\FieldGroup;

    /**
     * Class Page
     * @property boolean $ShowTitle
     */
    class Page extends SiteTree
    {
        private static $db = [
            'ShowTitle' => 'Boolean'
        ];

        private static $has_one = [];

        private static $defaults = [
            'ShowTitle' => true
        ];

        public function getCMSFields()
        {
            $fields = parent::getCMSFields();

            $CheckGroup = FieldGroup::create(
                CheckboxField::create('ShowTitle')
            )->setTitle('Layout');

            $fields->addFieldToTab('Root.Main', $CheckGroup, 'Content');

            return $fields;
        }
    }
}
