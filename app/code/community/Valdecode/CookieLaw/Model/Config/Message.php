<?php

/**
 * Valdecode - Cookie Law Compliance
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the The MIT License (MIT)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://raw.githubusercontent.com/valdecode/magento-cookielaw/master/LICENSE.txt
 *
 * @category    Valdecode
 * @package     Valdecode_CookieLaw
 * @copyright   Copyright (c) 2016 VALDECODE ONLINE SL.
 * @license     https://raw.githubusercontent.com/valdecode/magento-cookielaw/master/LICENSE.txt  The MIT License (MIT)
 */
class Valdecode_CookieLaw_Model_Config_Message
{
    public function toOptionArray()
    {
        return array(
            array('value' => 'default', 'label' => 'Default message'),
            array('value' => 'custom', 'label' => 'Custom message'),
        );
    }
}
