<?php

namespace Personal {

    use SilverStripe\ORM\DataExtension;

    /**
     * Class Image_Extension
     * @package Personal
     */
    class Image_Extension extends DataExtension
    {
        private static $has_one = [
            'ArticlePortfolio' => PortfolioArticlePage::class
        ];
    }
}
