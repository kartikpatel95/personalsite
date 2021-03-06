<?php

namespace {

    use Personal\HomePageController;
    use SilverStripe\CMS\Controllers\ContentController;
    use SilverStripe\View\Requirements;
    use SilverStripe\Control\Controller;

    class PageController extends ContentController
    {
        private static $allowed_actions = [];

        protected function init()
        {
            parent::init();

            Requirements::themedJavascript('assets/javascript/frameworks/jquery-3.3.1.min');
            Requirements::themedJavascript('assets/javascript/frameworks/bootstrap');
            Requirements::themedJavascript('assets/javascript/frameworks/lightbox.min');
            Requirements::themedJavascript('assets/javascript/script');
            Requirements::javascript('https://unpkg.com/swiper/swiper-bundle.min.js');
            Requirements::css('https://unpkg.com/swiper/swiper-bundle.min.css');

            Requirements::themedJavascript('assets/javascript/navigation');
            Requirements::themedJavascript('assets/javascript/swiper');

            Requirements::css('https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap');
            Requirements::css('https://fonts.googleapis.com/css?family=Raleway:100,300,400,600,700,800&display=swap');
            Requirements::css("https://use.fontawesome.com/releases/v5.8.2/css/all.css");

            Requirements::themedCSS('assets/css/frameworks/typography');
            Requirements::themedCSS('assets/css/frameworks/bootstrap.min');
            Requirements::themedCSS('assets/css/frameworks/lightbox');
            Requirements::themedCSS('assets/css/layout.min');
        }


        /**
         * @return bool
         */
        public function getRenderNonHome(){
            if(Controller::curr() != HomePageController::class){
                return true;
            }
            return false;
        }
    }
}
