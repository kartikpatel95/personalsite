<?php

namespace Personal {

    use SilverStripe\Control\Director;
    use SilverStripe\Forms\DropdownField;
    use SilverStripe\Forms\FieldList;
    use SilverStripe\Forms\Form;
    use SilverStripe\Forms\FormAction;
    use SilverStripe\ORM\PaginatedList;
    use SilverStripe\View\ArrayData;

    /**
     * Class PortfolioPageController
     * @package Personal
     */
    class PortfolioPageController extends \PageController
    {
        private static $allowed_actions = [
            'SearchPortfolio'
        ];

        /**
         * @return PaginatedList
         */
        public function getPageArticles($results)
        {
            $paginatedPages = PaginatedList::create($results, $this->getRequest());
            $paginatedPages->setPageLength(9);
            return $paginatedPages;
        }

        /**
         * @return Form
         */
        public function SearchPortfolio(){
            $fields = FieldList::create(
                DropdownField::create('language', 'Language Filter')
                ->setSource(Language::get()->map('ID', 'Name'))
                    ->setEmptyString('')
                ->addExtraClass('form-control language-search-dropdown'),
                DropdownField::create('project-type', 'Project Type')
                    ->setSource(ProjectType::get()->map('ID', 'Name'))
                    ->setEmptyString('')
                ->addExtraClass('project-type')
            );

            $actions = FieldList::create(
                FormAction::create('doSearchPortfolio', 'Search')
                ->addExtraClass('portfolio-action')
            );

            $form = Form::create($this, __FUNCTION__, $fields, $actions);

            $form->setFormMethod('GET')
                ->setFormAction(Director::get_current_page()->Link())
                ->disableSecurityToken()
                ->loadDataFrom($this->request->getVars());

            return $form->addExtraClass('portfolio-form');
        }

        /**
         * @return ArrayData
         */
        public function PortfolioResults(){
            $languageID = $this->getRequest()->getVar('language');
            $projectType = $this->getRequest()->getVar('project-type');
            if($languageID || $projectType){
                $portfolio = PortfolioArticlePage::get()->filterAny([
                    'Languages.ID' => [$languageID],
                    'ProjectTypeID' => [$projectType]
                ]);
                $paginatedItems = $this->getPageArticles($portfolio);
                $countResult = $portfolio->count();
                return ArrayData::create([
                    'Results' => $paginatedItems,
                    'ResultCount' => $countResult
                ]);
            }else{
                $paginatedItems = $this->getPageArticles(PortfolioArticlePage::get()->filter(['ParentID' => $this->ID]));
                return ArrayData::create([
                    'Results' => $paginatedItems
                ]);

            }
        }
    }
}
