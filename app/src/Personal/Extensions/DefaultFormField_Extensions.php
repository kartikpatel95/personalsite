<?php
/**
 * Created by PhpStorm.
 * User: kartik
 * Date: 2019-09-01
 * Time: 18:16
 */

namespace Personal {

    use SilverStripe\Core\Extension;
    use SilverStripe\Forms\TextField;
    use SilverStripe\Forms\TextareaField;
    use SilverStripe\Forms\FormAction;

    /**
     * Class DefaultFormField_Extensions
     * @package Personal
     */
    class DefaultFormField_Extensions extends Extension {
        /**
         * @param $attributes
         */
        public function updateAttributes(&$attributes)
        {
            if ($this->getOwner() instanceof TextField || $this->getOwner() instanceof TextareaField) {
                $attributes['class'] = $attributes['class'] . ' form-control';
            } else if ($this->getOwner() instanceof FormAction) {
                $attributes['class'] = $attributes['class'] . ' btn btn-primary';
            }
        }

    }
}