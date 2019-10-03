<?php
/**
 * Created by PhpStorm.
 * User: kartik
 * Date: 2019-09-01
 * Time: 21:23
 */

namespace Personal {

    use PageController;
    use SilverStripe\View\Requirements;

    class HomePageController extends PageController {

        public function init()
        {
            parent::init();
//            Requirements::themedCSS('assets/css/pages/home');
        }
    }
}