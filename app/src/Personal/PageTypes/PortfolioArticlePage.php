<?php

namespace Personal {

    use gorriecoe\Link\Models\Link;
    use gorriecoe\LinkField\LinkField;
    use SilverStripe\Forms\GridField\GridField;
    use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
    use SilverStripe\Forms\ListboxField;
    use Symbiote\GridFieldExtensions\GridFieldOrderableRows;

    /**
     * Class PortfolioArticlePage
     * @package Personal
     */
    class PortfolioArticlePage extends \Page
    {
        private static $table_name = "PortfolioArticlePage";
        private static $description = "Portfolio Description";
        private static $icon_class = "font-icon-menu-files";
        private static $can_be_root = false;

        private static $has_one = [
            'PortfolioURL' => Link::class
        ];

        private static $has_many = [
            'PortfolioItems' => PortfolioItems::class
        ];

        private static $many_many = [
            'Languages' => Language::class,
        ];

        public function getCMSFields()
        {
            $fields = parent::getCMSFields();
            $fields->addFieldToTab('Root.Main',
                ListboxField::create('Languages', "Tools",
                    $this->getLanguageOptions()), 'Content');
            $fields->addFieldToTab('Root.Main', LinkField::create('PortfolioURL', 'Portfolio URL', $this), 'Content');
            $fields->addFieldToTab('Root.PortfolioItems', $this->getPortfolioItemsGrid());

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

        public function getPortfolioItemsGrid()
        {
            $portGrid = GridField::create(
                'PortfolioItems', 'Portfolio Items', $this->PortfolioItems(), GridFieldConfig_RecordEditor::create()
            );
            $portGrid->getConfig()->addComponent(new GridFieldOrderableRows('SortID'));
            return $portGrid;
        }
    }
}
