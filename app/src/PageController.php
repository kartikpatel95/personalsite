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
            Requirements::css("https://use.fontawesome.com/releases/v5.8.2/css/all.css");
            Requirements::themedCSS('assets/css/frameworks/typography');
            Requirements::themedCSS('assets/css/frameworks/bootstrap.min');
            Requirements::themedCSS('assets/css/partials/footer');
        }
    }
}
