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
class Valdecode_CookieLaw_Helper_Data extends Mage_Core_Helper_Abstract
{
    public function isActive()
    {
        return !Mage::getStoreConfig('advanced/modules_disable_output/Valdecode_CookieLaw');
    }

    public function getType()
    {
        return Mage::getStoreConfig('cookielaw/general/type');
    }

    public function getBarPosition()
    {
        return Mage::getStoreConfig('cookielaw/general/bar_position');
    }

    public function getBoxPosition()
    {
        return Mage::getStoreConfig('cookielaw/general/box_position');
    }

    public function getSkin()
    {
        return Mage::getStoreConfig('cookielaw/general/skin');
    }

    public function getBehaviour()
    {
        return Mage::getStoreConfig('cookielaw/general/behaviour');
    }

    public function getAutohide()
    {
        return Mage::getStoreConfig('cookielaw/general/autohide');
    }

    public function getCmsPage()
    {
        return Mage::getUrl(Mage::getStoreConfig('cookielaw/content/cms_page'));
    }

    public function getShow()
    {
        return Mage::getStoreConfig('cookielaw/content/show');
    }

    public function getCustomMessage()
    {
        return Mage::getStoreConfig('cookielaw/content/custom_message');
    }

    public function getCustomMoreInfo()
    {
        return Mage::getStoreConfig('cookielaw/content/custom_more_info');
    }

    public function getCustomAccept()
    {
        return Mage::getStoreConfig('cookielaw/content/custom_accept');
    }
}
