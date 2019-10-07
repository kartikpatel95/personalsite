<?php
/**
 * Created by PhpStorm.
 * User: kartik
 * Date: 2019-09-02
 * Time: 12:40
 */

namespace Personal {

    use page;
    use SilverStripe\Assets\Image;
    use SilverStripe\Forms\GridField\GridField;
    use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
    use SilverStripe\AssetAdmin\Forms\UploadField;
    use UndefinedOffset\SortableGridField\Forms\GridFieldSortableRows;

    /**
     * Class TimelinePage
     * @package Personal
     */
    class TimelinePage extends Page {
        private static $table_name = "TimelinePage";
        private static $icon_class = "font-icon-back-in-time";

//        private static $has_one = [
//            'Background' => Image::class
//        ];

        private static $has_many = [
            'Timeline' => TimeLine::class
        ];

//        private static $owns = [
//            'Background'
//        ];

        public function getCMSFields()
        {
            $fields = parent::getCMSFields();

//            $fields->addFieldToTab('Root.Main', $background = UploadField::create('Background'));
//            $background->setFolderName('Backgrounds');
//            $background->getValidator()->setAllowedExtensions(['png', 'jpeg', 'jpg', 'gif']);

            $fields->addFieldToTab('Root.Data', $this->getTimeLineGrid());

            return $fields;
        }

        /**
         * @return GridField
         */
        public function getTimeLineGrid(){
            $timelineGrid = GridField::create(
                'Timeline', 'Timeline', $this->Timeline(), GridFieldConfig_RecordEditor::create()
            );
            $timelineGrid->getConfig()->addComponent(new GridFieldSortableRows('SortID'));
            return $timelineGrid;
        }
    }
}
