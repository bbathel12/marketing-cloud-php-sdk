<?php

/*
 * This file is part of bbathel12 Salesforce Marketing Cloud PHP SDK.
 *
 * (c) 2017 Yaroslav Honcharuk <yaroslav.xs@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace bbathel12\MarketingCloud;

class Version
{
    const VERSION = '0.1.0';

    const PACKAGE_NAME = 'bbathel12/marketing-cloud-php-sdk';

    /**
     * @return string
     */
    public static function getUserAgent()
    {
        return self::PACKAGE_NAME.' '.self::VERSION;
    }
}
