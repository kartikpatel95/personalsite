<?php
/**
 * Created by PhpStorm.
 * User: kartik
 * Date: 2019-09-01
 * Time: 17:40
 */
namespace Personal {

    use Page;

    /**
     * Class HomePage
     * @package Personal
     */
    class HomePage extends Page {
        private static $table_name = "HomePage";
        private static $description = "Used only for homepage";
        private static $icon_class = "font-icon-home";
    }
}
