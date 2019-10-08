<?php
/**
 * Created by PhpStorm.
 * User: kartik
 * Date: 2019-09-02
 * Time: 16:33
 */

namespace Personal {

    use Page;
    use SilverStripe\Forms\GridField\GridField;
    use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
    use UndefinedOffset\SortableGridField\Forms\GridFieldSortableRows;

    /**
     * Class TilePage
     * @package Personal
     */
    class TilePage extends Page {
        private static $table_name = "TilePage";
        private static $icon_class = "font-icon-block-layout";

        private static $has_many = [
          'Tiles' => TileData::class
        ];

        public function getCMSFields(){
            $fields = parent::getCMSFields();
            $fields->addFieldToTab('Root.Tiles', $this->getTileGrid());

            return $fields;
        }

        /**
         * @return GridField
         */
        public function getTileGrid(){
            $tileGrid = GridField::create(
                'Tiles', 'Tiles', $this->Tiles(), GridFieldConfig_RecordEditor::create()
            );
            $tileGrid->getConfig()->addComponent(new GridFieldSortableRows('SortID'));

            return $tileGrid;
        }
    }
}
