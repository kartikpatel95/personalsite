<?php

namespace Personal {

    /**
     * Class ImageHelpers
     * @package Personal
     */
    class ImageHelpers
    {
        /**
         * @param $image
         * @param $name
         */
        public static function setImageDetails($image, $name = 'Layout')
        {
            $image->setFolderName($name);
            $image->getValidator()->setAllowedExtensions(['jpeg', 'png', 'jpg', 'jif']);
        }
    }
}
