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

            Requirements::themedJavascript('assets/javascript/frameworks/jquery-3.3.1.min');
            Requirements::themedJavascript('assets/javascript/frameworks/bootstrap');

            Requirements::css('https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap');
            Requirements::css("https://use.fontawesome.com/releases/v5.8.2/css/all.css");
            Requirements::themedCSS('assets/css/frameworks/typography');
            Requirements::themedCSS('assets/css/frameworks/bootstrap.min');
            Requirements::themedCSS('assets/css/partials/footer');
            Requirements::themedCSS('assets/css/partials/header');
            Requirements::themedCSS('assets/css/partials/timeline');
            Requirements::themedCSS('assets/css/pages/skills');
        }
    }
}
