<?php
/**
 * Created by PhpStorm.
 * User: kartik
 * Date: 2019-10-25
 * Time: 15:57
 */

namespace Personal {

    use SilverStripe\Forms\RequiredFields;
    use SilverStripe\Forms\TextField;
    use SilverStripe\ORM\DataObject;

    /**
     * Class ProjectType
     * @package Personal
     * @property string $Name
     */
    class ProjectType extends DataObject {
        private static $table_name = "ProjectType";
        private static $singular_name = "Project Type";
        private static $plural_name = "Project Types";

        private static $db = [
          'Name' => 'Varchar'
        ];

        private static $summary_fields = [
            'Name'
        ];

        private static $has_many = [
          'PortfolioArticle' => PortfolioArticlePage::class
        ];

        public function getCMSFields()
        {
            $fields = parent::getCMSFields();
            $fields->addFieldToTab('Root.Main', TextField::create('Name'));
            return $fields;
        }

        public function getCMSValidation(){
            return RequiredFields::create([
                'Name'
            ]);
        }
    }
}