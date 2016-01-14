<?php

/**
 * Valdecode - Cookie Law Compliance
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the The MIT License (MIT)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.valdecode.com/license/cookielaw/license.txt
 *
 * @category    Valdecode
 * @package     Valdecode_CookieLaw
 * @copyright   Copyright (c) 2014 Valdecode
 * @license     http://www.valdecode.com/license/cookielaw/license.txt  The MIT License (MIT)
 */
class Valdecode_CookieLaw_Model_Config_Type
{
    public function toOptionArray()
    {
        return array(
            array('value' => 'v-bar', 'label' => 'Bar'),
            array('value' => 'v-box', 'label' => 'Box'),
        );
    }
}
