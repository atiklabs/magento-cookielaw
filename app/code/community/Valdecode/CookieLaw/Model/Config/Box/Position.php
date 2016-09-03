<?php

/**
 * Copyright 2016 The Valdecode Cookie Law Compliance Authors. All rights reserved.
 * Use of this source code is governed by a MIT-style
 * license that can be found in the LICENSE.txt file.
 */
class Valdecode_CookieLaw_Model_Config_Box_Position
{
    public function toOptionArray()
    {
        return array(
            array('value' => 'v-top-left', 'label' => 'Top left'),
            array('value' => 'v-top-right', 'label' => 'Top right'),
            array('value' => 'v-bottom-left', 'label' => 'Bottom left'),
            array('value' => 'v-bottom-right', 'label' => 'Bottom right'),
        );
    }
}
