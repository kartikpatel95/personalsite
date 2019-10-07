<?php

namespace Personal {

    use SilverStripe\Forms\RequiredFields;
    use SilverStripe\ORM\DataObject;
    use SilverStripe\ORM\ValidationResult;

    /**
     * Class Skill
     * @package Personal
     * @property string $Name
     */
    class Language extends DataObject
    {
        private static $table_name = "Language";
        private static $db = [
            'Name' => 'Varchar(68)'
        ];

        private static $belongs_many_to_many = [
            'PortfolioArticle' => PortfolioArticlePage::class
        ];

        private static $summary_fields = [
            'Name'
        ];
        private static $default_sort = 'Name ASC';

        public function getCMSValidator()
        {
            return RequiredFields::create([
                'Name'
            ]);
        }

        public function validate()
        {
            $result = parent::validate();
            try {
                $this->validation($result);
            } catch (\Exception $exc) {
                $result->addError($exc->getMessage());
            }
            return $result;
        }

        /**
         * @param ValidationResult $result
         */
        public function validation(ValidationResult $result)
        {
            $this->getTrimData();
            $name = Language::get()->filter(['Name' => $this->Name])->first();
            if (isset($name) && $name->ID !== $this->ID)
                $result->addFieldError('Name', $this->Name . ' already exists');
        }

        public function onBeforeWrite()
        {
            parent::onBeforeWrite();
            $this->getTrimData();
        }

        public function getTrimData()
        {
            $this->Name = trim($this->Name);
        }
    }
}
