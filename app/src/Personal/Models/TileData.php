<?php
/**
 * Created by PhpStorm.
 * User: kartik
 * Date: 2019-09-02
 * Time: 16:36
 */

namespace Personal {

    use SebastianBergmann\CodeCoverage\Report\Text;
    use SilverStripe\Forms\DropdownField;
    use SilverStripe\Forms\RequiredFields;
    use SilverStripe\Forms\TextareaField;
    use SilverStripe\Forms\TextField;
    use SilverStripe\ORM\DataObject;

    /**
     * Class TileData
     * @package Personal
     * @property string $Title
     * @property Text $Description
     * @property int $SortID
     */
    class TileData extends DataObject {
        private static $table_name = "TileData";
        private static $singular_name = "Tile Data";
        private static $plural_name = "Tile Datas";

        private static $db = [
            'Title' => 'Varchar(128)',
            'SkillType' => "Enum('Management,Technical')",
            'Description' => 'Text',
            'SortID' => 'Int'
        ];

        private static $has_one = [
            'TilePage' => TilePage::class
        ];

        private static $summary_fields = [
            'Title',
            'SkillType'
        ];

        public function getCMSFields()
        {
            $fields = parent::getCMSFields();
            $fields->removeFieldsFromTab('Root.Main', ['SortID', 'TilePageID']);
            $fields->addFieldsToTab('Root.Main', [
                TextField::create('Title'),
                TextareaField::create('Description')
            ]);

            $fields->addFieldToTab('Root.Main', DropdownField::create(
                'SkillType','Skill Type:', $this->dbObject('SkillType')->enumValues()
            )->setEmptyString('Select Type'));

            return $fields;
        }

        public function getCMSValidator(){
            return RequiredFields::create(
                'Title', 'SkillType'
            );
        }
    }
}