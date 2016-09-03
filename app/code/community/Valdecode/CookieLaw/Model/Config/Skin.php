<?php

/**
 * Copyright 2016 The Valdecode Cookie Law Compliance Authors. All rights reserved.
 * Use of this source code is governed by a MIT-style
 * license that can be found in the LICENSE.txt file.
 */
class Valdecode_CookieLaw_Model_Config_Skin
{
    public function toOptionArray()
    {
        return array(
            array('value' => '', 'label' => 'Without skin'),
            array('value' => 'v-yellow-alert', 'label' => 'Yellow alert'),
            array('value' => 'v-dark-clean', 'label' => 'Dark clean'),
            array('value' => 'v-minimalist', 'label' => 'Minimalist')
        );
    }
}
