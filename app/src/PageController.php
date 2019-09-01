<?php

namespace {

    use SilverStripe\CMS\Controllers\ContentController;
    use SilverStripe\View\Requirements;

    class PageController extends ContentController
    {
        private static $allowed_actions = [];

        protected function init()
        {
            parent::init();
            Requirements::css('https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap');
            Requirements::themedCSS('assets/css/typography');
        }
    }
}
