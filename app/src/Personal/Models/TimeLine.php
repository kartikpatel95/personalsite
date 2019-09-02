<?php
/**
 * Created by PhpStorm.
 * User: kartik
 * Date: 2019-09-02
 * Time: 13:01
 */

namespace Personal {

    use SilverStripe\Dev\Debug;
    use SilverStripe\Forms\DateField;
    use SilverStripe\Forms\RequiredFields;
    use SilverStripe\Forms\TextareaField;
    use SilverStripe\Forms\TextField;
    use SilverStripe\ORM\DataObject;

    /**
     * Class TimeLine
     * @package Personal
     * @property Date $StartDate
     * @property Date $EndDate
     * @property string $DateLabel
     * @property string $DescriptionLabel
     * @property string $Description
     * @property int $SortID
     */
    class TimeLine extends DataObject {
        private static $table_name = "TimeLine";
        private static $singular_name = "Time Line";
        private static $plural_name = "Time Lines";

        private static $db = [
            'StartDate' => 'Date',
            'EndDate' => 'Date',
            'DateLabel' => 'Varchar(64)',
            'DescriptionLabel' => 'Varchar(64)',
            'Description' => 'Varchar(256)',
            'SortID' => 'Int'
        ];

        private static $has_one = [
          'TimelinePage' => TimelinePage::class
        ];

        private static $summary_fields = [
            'DateLabel',
            'StartDate.Nice',
            'EndDate.Nice',
            'DescriptionLabel',
            'Description'
        ];

        private static $casting = [
            'Dates' => 'Varchar'
        ];

        public function getCMSFields()
        {
            $fields = parent::getCMSFields();
            $fields->removeFieldsFromTab('Root.Main', ['TimelinePageID', 'SortID']);
            $fields->addFieldsToTab('Root.Main', [
                DateField::create('StartDate'),
                DateField::create('EndDate'),
                TextField::create('DateLabel'),
                TextField::create('DescriptionLabel'),
                TextareaField::create('Description')
            ]);

            return $fields;
        }

        public function getCMSValidator(){
            return RequiredFields::create(
                'DateLabel', 'DescriptionLabel', 'StartDate', 'Description'
            );
        }

        /**
         * @return string
         */
        public function getDates(){
            $start = str_replace('-', '/', $this->StartDate);
            $end = str_replace('-', '/', $this->EndDate);
            return ($this->EndDate) ? date('d/m/y', strtotime($start)) . ' - ' . date('d/m/y', strtotime($end)) : date('d/m/y', strtotime($start)) . ' - Current';
        }
    }
}