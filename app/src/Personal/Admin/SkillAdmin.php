<?php

namespace Personal {

    use SilverStripe\Admin\ModelAdmin;

    /**
     * Modal admin for adding languages to select on page
     * Class SkillAdmin
     * @package Personal
     */
    class SkillAdmin extends ModelAdmin
    {
        private static $managed_models = [
            Language::class
        ];
        private static $url_segment = 'skills';
        private static $menu_title = 'Languages';
        private static $menu_icon_class = 'font-icon-code';
    }
}
